<?php

namespace App\Livewire\UtilityCosts;

use DB;
use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;
use App\Models\BillingHeader;
use App\Models\BillingRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\BillingService;
use Illuminate\Support\Facades\Storage;

class BillingGeneration extends Component
{
    public $billingHeaders;
    public $tenants;
    public $savedBillings;
    public $rentalObjects;
    public $billing_header_id;
    public $tenant_id;
    public $billing_period;

    // Fehlende Eigenschaften hinzufügen
    public $selectedHeaderId;
    public $selectedTenantId;
    public $selectedRentalObjectId;
    public $billingPeriod;
    public $prepayment;

    public function mount()
    {
        $this->billingHeaders = BillingHeader::all();
        $this->tenants = Tenant::all();
        $this->rentalObjects = RentalObject::all(); // Mietobjekte laden
        $this->savedBillings = BillingRecords::all();
    }

    public function generateBilling()
    {
        $this->validate([
            'selectedHeaderId' => 'required|exists:billing_headers,id',
            'selectedTenantId' => 'required|exists:tenants,id',
            'selectedRentalObjectId' => 'required|exists:rental_objects,id',
            'billingPeriod' => 'required|string',
            'prepayment' => 'nullable|numeric|min:0',
        ]);

        $year = substr($this->billingPeriod, 0, 4);
        $prepaymentSum = DB::table('tenant_payments')
            ->where('tenant_id', $this->selectedTenantId)
            ->where('rental_object_id', $this->selectedRentalObjectId)
            ->where('year', $year)
            ->sum('amount');

        $billingService = app(BillingService::class);
        $calculation = $billingService->calculateCosts(
            $this->selectedRentalObjectId,
            $this->selectedTenantId,
            $this->billingPeriod,
            $prepaymentSum
        );

        $billingRecord = BillingRecords::create([
            'billing_header_id' => $this->selectedHeaderId,
            'tenant_id' => $this->selectedTenantId,
            'rental_object_id' => $this->selectedRentalObjectId,
            'billing_period' => $this->billingPeriod,
            'total_cost' => $calculation['total_cost'],
            'prepayment' => $prepaymentSum,
            'balance_due' => $calculation['balance_due'],
            'standard_costs' => json_encode($calculation['standard_costs']),
            'heating_costs' => json_encode($calculation['heating_costs']),
        ]);

        $billingRecord = BillingRecords::with(['billingHeader', 'tenant', 'rentalObject'])->find($billingRecord->id);

        $pdfData = [
            'billingRecord' => $billingRecord,
            'billingHeader' => $billingRecord->billingHeader,
            'tenant' => $billingRecord->tenant,
            'rentalObject' => $billingRecord->rentalObject,
        ];

        // Generate the first PDF
        $pdf1 = Pdf::loadView('pdf.billing', $pdfData)
                  ->setPaper('a4')
                  ->setOptions([
                      'margin-top' => 10,
                      'margin-right' => 20,
                      'margin-bottom' => 10,
                      'margin-left' => 20,
                  ]);
        $filePath1 = 'billing_pdfs/billing_page1_' . now()->timestamp . '.pdf';
        Storage::disk('public')->put($filePath1, $pdf1->output());

        // Generate the second PDF
        $pdf2 = Pdf::loadView('pdf.billing_page2', $pdfData)
                  ->setPaper('a4')
                  ->setOptions([
                      'margin-top' => 10,
                      'margin-right' => 20,
                      'margin-bottom' => 10,
                      'margin-left' => 20,
                  ]);
        $filePath2 = 'billing_pdfs/billing_page2_' . now()->timestamp . '.pdf';
        Storage::disk('public')->put($filePath2, $pdf2->output());

        // Update billing record with both PDF paths
        $billingRecord->update([
            'pdf_path' => Storage::url($filePath1),
            'pdf_path_second' => Storage::url($filePath2),
        ]);

        session()->flash('message', 'Abrechnungen erfolgreich erstellt.');

        $this->savedBillings = BillingRecords::all();
    }


    public function deleteBilling($id)
    {
        $billingRecord = BillingRecords::find($id);

        if ($billingRecord) {
            if ($billingRecord->pdf_path && Storage::disk('public')->exists($billingRecord->pdf_path)) {
                Storage::disk('public')->delete($billingRecord->pdf_path);
            }

            $billingRecord->delete();

            session()->flash('message', 'Abrechnung erfolgreich gelöscht.');
            $this->savedBillings = BillingRecords::all();
        } else {
            session()->flash('error', 'Abrechnung konnte nicht gefunden werden.');
        }
    }

    public function render()
    {
        return view('livewire.utility-costs.billing-generation', [
            'billingHeaders' => $this->billingHeaders,
            'tenants' => $this->tenants,
            'rentalObjects' => $this->rentalObjects,
            'savedBillings' => $this->savedBillings,
        ]);
    }
}

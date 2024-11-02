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

        // Vorauszahlungen berechnen
        $year = substr($this->billingPeriod, 0, 4); // Extrahiere das Jahr aus dem Abrechnungszeitraum
        $prepaymentSum = DB::table('tenant_payments')
            ->where('tenant_id', $this->selectedTenantId)
            ->where('rental_object_id', $this->selectedRentalObjectId)
            ->where('year', $year)
            ->sum('amount');

        // Berechnung und Speicherung der Abrechnungskosten
        $billingService = app(BillingService::class);
        $calculation = $billingService->calculateCosts(
            $this->selectedRentalObjectId,
            $this->selectedTenantId,
            $this->billingPeriod,
            $prepaymentSum // übergibt die berechneten Vorauszahlungen
        );

//dd($calculation);

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


        // Laden der Daten für PDF-Erstellung inklusive Beziehungen
        $billingRecord = BillingRecords::with(['billingHeader', 'tenant', 'rentalObject'])->find($billingRecord->id);


        $pdfData = [
            'billingRecord' => $billingRecord,
            'billingHeader' => $billingRecord->billingHeader,
            'tenant' => $billingRecord->tenant,
            'rentalObject' => $billingRecord->rentalObject,
        ];

//dd($pdfData);


        $pdf = Pdf::loadView('pdf.billing', $pdfData);
        $filePath = 'billing_pdfs/billing_' . now()->timestamp . '.pdf';
        Storage::disk('public')->put($filePath, $pdf->output());

        $billingRecord->update(['pdf_path' => Storage::url($filePath)]);
        session()->flash('message', 'Abrechnung erfolgreich erstellt.');
        $this->savedBillings = BillingRecords::all();
    }


    public function deleteBilling($id)
    {
        $billingRecord = BillingRecords::find($id);

        if ($billingRecord) {
            // Delete the PDF file if it exists
            if ($billingRecord->pdf_path && Storage::disk('public')->exists($billingRecord->pdf_path)) {
                Storage::disk('public')->delete($billingRecord->pdf_path);
            }

            // Delete the billing record from the database
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


<?php

namespace App\Livewire\UtilityCosts;

use DB;
use Carbon\Carbon;
use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;
use Livewire\WithPagination;
use App\Models\BillingHeader;
use App\Models\BillingRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\BillingService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BillingGeneration extends Component
{
    use WithPagination;

    public $billingHeaders;
    public $tenants;
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

    public $searchTerm; // Für die Suchfunktion
    public $fromDate;
    public $toDate;
    public $sortField = 'billing_records.created_at';
    public $sortDirection = 'desc';

    protected $queryString = ['searchTerm', 'fromDate', 'toDate', 'sortField', 'sortDirection'];

    public function mount()
    {
        $this->billingHeaders = BillingHeader::where('user_id', Auth::id())->get();
        $this->tenants = Tenant::where('user_id', Auth::id())->get();
        $this->rentalObjects = RentalObject::where('user_id', Auth::id())->get();
        $this->savedBillings = BillingRecords::where('user_id', Auth::id())->get();
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

        // Fetch prepayment sum
        $prepaymentSum = DB::table('tenant_payments')
            ->where('tenant_id', $this->selectedTenantId)
            ->where('rental_object_id', $this->selectedRentalObjectId)
            ->where('year', $year)
            ->where('user_id', Auth::id())
            ->sum('amount');

        $billingService = app(BillingService::class);
        $calculation = $billingService->calculateCosts(
            $this->selectedRentalObjectId,
            $this->selectedTenantId,
            $this->billingPeriod,
            $prepaymentSum
        );

// Fetch heating data
$heatingCosts = DB::table('heating_costs')
    ->where('rental_object_id', $this->selectedRentalObjectId)
    ->where('year', $year)
    ->where('user_id', Auth::id())
    ->first();

// Define heating data array
$heatingData = [
    'initialReading' => $heatingCosts->initial_reading ?? 0,
    'finalReading' => $heatingCosts->final_reading ?? 0,
    'totalFuelConsumption' => $heatingCosts->total_oil_used ?? 0,
    'price_per_unit' => $heatingCosts->price_per_unit ?? 0,
    'totalFuelCost' => $heatingCosts ? $heatingCosts->total_oil_used * $heatingCosts->price_per_unit : 0,
    'warmWaterCost' => $heatingCosts ? ($heatingCosts->total_oil_used * $heatingCosts->price_per_unit) * ($heatingCosts->warm_water_percentage ?? 0) : 0,
    'heatingOnlyCost' => $heatingCosts ? ($heatingCosts->total_oil_used * $heatingCosts->price_per_unit) * (1 - ($heatingCosts->warm_water_percentage ?? 0)) : 0,
];

        // Create or update the billing record
        $billingRecord = BillingRecords::create([
            'user_id' => Auth::id(),
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

        // Fetch tenant payment records
        $tenantPayments = DB::table('tenant_payments')
            ->where('tenant_id', $this->selectedTenantId)
            ->where('rental_object_id', $this->selectedRentalObjectId)
            ->where('year', $year)
            ->where('user_id', Auth::id())
            ->get();

        // Prepare data for the PDFs
        $pdfData = [
            'billingRecord' => $billingRecord,
            'billingHeader' => $billingRecord->billingHeader,
            'tenant' => $billingRecord->tenant,
            'rentalObject' => $billingRecord->rentalObject,
            'tenants' => Tenant::where('rental_object_id', $this->selectedRentalObjectId)->where('user_id', Auth::id())->get(),
            'billingPeriod' => $this->billingPeriod,
            'heatingData' => $heatingData,
            'heatingCosts' => $heatingCosts,
            'calculation' => $calculation,
            'tenantPayments' => $tenantPayments,
        ];

        // Generate and store each PDF
        $this->generatePdf($pdfData, 'billing', 'billing_page1_', $billingRecord, 'pdf_path');
        $this->generatePdf($pdfData, 'billing_page2', 'billing_page2_', $billingRecord, 'pdf_path_second');
        $this->generatePdf($pdfData, 'tenant_payments', 'billing_page3_', $billingRecord, 'pdf_path_third');

        session()->flash('message', 'Abrechnungen erfolgreich erstellt.');
        $this->savedBillings = BillingRecords::where('user_id', Auth::id())->get();
    }

    private function generatePdf($data, $view, $filePrefix, $billingRecord, $pathField)
    {
        $pdf = Pdf::loadView("pdf.$view", $data)
                  ->setPaper('a4')
                  ->setOptions(['margin-top' => 10, 'margin-right' => 20, 'margin-bottom' => 10, 'margin-left' => 20]);
        $filePath = "billing_pdfs/{$filePrefix}" . now()->timestamp . ".pdf";
        Storage::disk('public')->put($filePath, $pdf->output());

        $billingRecord->update([$pathField => Storage::url($filePath)]);
    }

    public function deleteBilling($id)
    {
        $billingRecord = BillingRecords::where('user_id', Auth::id())->find($id);

        if ($billingRecord) {
            if ($billingRecord->pdf_path && Storage::disk('public')->exists($billingRecord->pdf_path)) {
                Storage::disk('public')->delete($billingRecord->pdf_path);
            }

            $billingRecord->delete();

            session()->flash('message', 'Abrechnung erfolgreich gelöscht.');
            $this->savedBillings = BillingRecords::where('user_id', Auth::id())->get();
        } else {
            session()->flash('error', 'Abrechnung konnte nicht gefunden werden.');
        }
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function resetFilters()
    {
        $this->searchTerm = '';
        $this->fromDate = null;
        $this->toDate = null;
    }


    public function render()
    {
        $query = BillingRecords::with(['billingHeader', 'tenant', 'rentalObject'])
            ->leftJoin('tenants', 'billing_records.tenant_id', '=', 'tenants.id')
            ->leftJoin('billing_headers', 'billing_records.billing_header_id', '=', 'billing_headers.id')
            ->select(
                'billing_records.*',
                'tenants.first_name as tenant_first_name',
                'tenants.last_name as tenant_last_name',
                'billing_headers.creator_name as billing_header_creator_name'
            );

        // Sicherstellen, dass `user_id` eindeutig spezifiziert ist
        $query->where('billing_records.user_id', Auth::id());

        // Filterung nach Suchbegriff
        if ($this->searchTerm) {
            $query->where(function ($q) {
                $q->where('tenants.first_name', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('tenants.last_name', 'like', '%' . $this->searchTerm . '%');
            });
        }

        // Filterung nach Datum
        if ($this->fromDate && $this->toDate) {
            $query->whereBetween('billing_records.created_at', [
                Carbon::parse($this->fromDate)->startOfDay(),
                Carbon::parse($this->toDate)->endOfDay()
            ]);
        }

        // Dynamische Sortierung
        if (in_array($this->sortField, ['billing_records.created_at', 'billing_period'])) {
            $query->orderBy($this->sortField, $this->sortDirection);
        } elseif ($this->sortField === 'tenant_first_name') {
            $query->orderBy('tenant_first_name', $this->sortDirection);
        } elseif ($this->sortField === 'billing_header_creator_name') {
            $query->orderBy('billing_header_creator_name', $this->sortDirection);
        } else {
            $query->orderBy('billing_records.created_at', $this->sortDirection);
        }

        // Debugging: Parameter und Ausgabe der Query vor Paginierung
        $savedBillingsRaw = $query->get();

        // Paginated Results
        $savedBillings = $query->paginate(10);
        //$savedBillings = $query->get(); // Temporär ohne Paginierung, um die Daten direkt zu prüfen
        //dd($savedBillings);

        // Rückgabe der Ansicht
        return view('livewire.utility-costs.billing-generation', [
            'billingHeaders' => $this->billingHeaders,
            'tenants' => $this->tenants,
            'rentalObjects' => $this->rentalObjects,
            'savedBillings' => $savedBillings,
        ]);
    }
}

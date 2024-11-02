<?php

namespace App\Livewire\UtilityCosts;

use Carbon\Carbon;
use App\Models\Tenant;
use Livewire\Component;
use App\Models\HeatingCost;
use App\Models\RentalObject;
use App\Models\AnnualBillingRecord;
use App\Models\RecordedUtilityCost;
use App\Services\HeatingCostService;

class BillingCalculation extends Component
{
    public $year;
    public $rental_object_id;
    public $calculatedCosts = [];
    public $rentalObjects;
    protected $heatingCostService;

    public function mount()
    {
        $this->year = date('Y');
        $this->rentalObjects = RentalObject::all();
    }

    public function updatedRentalObjectId()
    {
        $this->calculateAndSaveAnnualBilling(app(HeatingCostService::class));
    }

    public function calculateAndSaveAnnualBilling(HeatingCostService $heatingCostService)
    {
        $this->calculatedCosts = [];

        if (!$this->rental_object_id) {
            session()->flash('error', 'Bitte wählen Sie ein Mietobjekt aus.');
            return;
        }

        $rentalObject = RentalObject::find($this->rental_object_id);
        if (!$rentalObject) {
            session()->flash('error', 'Das ausgewählte Mietobjekt existiert nicht.');
            return;
        }

        $utilityCosts = RecordedUtilityCost::where('rental_object_id', $this->rental_object_id)
                                           ->where('year', $this->year)
                                           ->get();

        $tenants = Tenant::where('rental_object_id', $this->rental_object_id)->get();
        $totalFactor = $rentalObject->billing_method === 'units'
                       ? $tenants->sum('unit_count')
                       : $tenants->sum('person_count');

        $this->heatingCostService = $heatingCostService;
        $totalHeatingCost = $this->heatingCostService->calculateHeatingCostsForYear($this->rental_object_id, $this->year);

        // Abrufen des Warmwasseranteils aus der Tabelle `heating_costs`
        $heatingCost = HeatingCost::where('rental_object_id', $this->rental_object_id)
                                  ->whereYear('created_at', $this->year)
                                  ->first();

        $warmWaterPercentage = $heatingCost ? $heatingCost->warm_water_percentage : 0;

        foreach ($tenants as $tenant) {
            $totalTenantCost = 0;
            $utilityDetails = [];

            $startOfYear = Carbon::parse("{$this->year}-01-01");
            $endOfYear = Carbon::parse("{$this->year}-12-31");

            $tenantStart = Carbon::parse($tenant->start_date)->max($startOfYear);
            $tenantEnd = $tenant->end_date ? Carbon::parse($tenant->end_date)->min($endOfYear) : $endOfYear;

            $daysInYear = $startOfYear->diffInDays($endOfYear) + 1;
            $tenantDays = $tenantStart->diffInDays($tenantEnd) + 1;

            if ($tenantDays <= 0) {
                continue;
            }

            foreach ($utilityCosts as $cost) {
                $shareFactor = $rentalObject->billing_method === 'units'
                               ? ($tenant->unit_count / $totalFactor)
                               : ($tenant->person_count / $totalFactor);

                $tenantCost = round(($cost->amount * $shareFactor * $tenantDays) / $daysInYear, 2);
                $totalTenantCost += $tenantCost;

                $utilityDetails[] = [
                    'short_name' => $cost->utilityCost->short_name ?? $cost->utilityCost->name,
                    'amount' => $tenantCost,
                ];

                AnnualBillingRecord::updateOrCreate(
                    [
                        'rental_object_id' => $this->rental_object_id,
                        'tenant_id' => $tenant->id,
                        'utility_cost_id' => $cost->utility_cost_id,
                        'year' => $this->year,
                    ],
                    [
                        'amount' => $tenantCost,
                        'distribution_key' => $cost->distribution_key,
                    ]
                );
            }

            $tenantHeatingCost = $this->heatingCostService->allocateCostToTenant($tenant, $totalHeatingCost, $daysInYear, $tenantDays, $totalFactor, $this->rental_object_id, $this->year);
            $totalTenantCost += $tenantHeatingCost;

            $utilityDetails[] = [
                'short_name' => 'Heizkosten',
                'amount' => $tenantHeatingCost,
            ];

            // Berechne Warmwasserkosten
            $warmWaterCost = $tenantHeatingCost * $warmWaterPercentage;

            $this->calculatedCosts[] = [
                'tenant' => $tenant,
                'total_cost' => $totalTenantCost,
                'heating_cost' => $tenantHeatingCost,
                'warm_water_cost' => $warmWaterCost,
                'utility_details' => $utilityDetails,
            ];
        }
    }

    public function render()
    {
        return view('livewire.utility-costs.billing-calculation', [
            'calculatedCosts' => $this->calculatedCosts,
        ]);
    }
}

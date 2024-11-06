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

        if ($utilityCosts->isEmpty()) {
            session()->flash('error', 'Keine Kosten für das ausgewählte Jahr gefunden.');
            return;
        }

        $tenants = Tenant::where('rental_object_id', $this->rental_object_id)->get();
        if ($tenants->isEmpty()) {
            session()->flash('error', 'Keine Mieter für das ausgewählte Mietobjekt gefunden.');
            return;
        }

        $totalUnits = $rentalObject->max_units ?: 1;
        $totalPeople = $tenants->sum('person_count') ?: 1;
        $totalArea = $rentalObject->square_meters ?: 1;

        \Log::info("Total Units: $totalUnits, Total People: $totalPeople, Total Area: $totalArea");

        $this->heatingCostService = $heatingCostService;
        $totalHeatingCost = $this->heatingCostService->calculateHeatingCostsForYear($this->rental_object_id, $this->year);

        // Initialisiere warmWaterPercentage korrekt
        $heatingCost = HeatingCost::where('rental_object_id', $this->rental_object_id)
                                  ->whereYear('created_at', $this->year)
                                  ->first();

        $warmWaterPercentage = $heatingCost ? $heatingCost->warm_water_percentage : 0;

        $startOfYear = Carbon::parse("{$this->year}-01-01");
        $endOfYear = Carbon::parse("{$this->year}-12-31");
        $daysInYear = $startOfYear->diffInDays($endOfYear) + 1;

        foreach ($tenants as $tenant) {
            $totalTenantCost = 0;
            $utilityDetails = [];

            $tenantStart = Carbon::parse($tenant->start_date)->max($startOfYear);
            $tenantEnd = $tenant->end_date ? Carbon::parse($tenant->end_date)->min($endOfYear) : $endOfYear;
            $tenantDays = $tenantStart->diffInDays($tenantEnd) + 1;

            if ($tenantDays <= 0) {
                continue;
            }

            foreach ($utilityCosts as $cost) {
                $shareFactor = 0;
                $totalShare = 1;

                \Log::info("Berechnung für Kosten: {$cost->amount} mit distribution_key: {$cost->distribution_key}");

                switch ($cost->distribution_key) {
                    case 'units':
                        $totalShare = $totalUnits;
                        $shareFactor = $tenant->unit_count ?: 1;
                        break;
                    case 'people':
                        $totalShare = $totalPeople;
                        $shareFactor = $tenant->person_count ?: 1;
                        break;
                    case 'area':
                        $totalShare = $totalArea;
                        $shareFactor = $tenant->square_meters ?: 1;
                        break;
                }

                if ($totalShare > 0 && $shareFactor > 0) {
                    $tenantCost = round(
                        ($cost->amount * ($tenantDays / $daysInYear) * ($shareFactor / $totalShare)),
                        2
                    );
                    $totalTenantCost += $tenantCost;

                    \Log::info("Mieter {$tenant->first_name} {$tenant->last_name} - Kosten: {$cost->amount}, Anteil: $shareFactor, Distribution Key: {$cost->distribution_key}, Gesamter Anteil: $totalShare, Berechnete Kosten: $tenantCost");

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
                } else {
                    \Log::warning("Anteil für Mieter {$tenant->first_name} {$tenant->last_name} ist 0 für Kosten {$cost->amount} mit Verteilerschlüssel {$cost->distribution_key}");
                }
            }

            // Berechnung für Heizkosten
            $tenantHeatingCost = $this->heatingCostService->allocateCostToTenant(
                $tenant,
                $totalHeatingCost,
                $daysInYear,
                $tenantDays,
                $totalUnits,
                $this->rental_object_id,
                $this->year
            );
            $totalTenantCost += $tenantHeatingCost;

            $utilityDetails[] = [
                'short_name' => 'Heizkosten',
                'amount' => $tenantHeatingCost,
            ];

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

<?php

namespace App\Services;

use App\Models\HeatingCost;
use App\Models\Tenant;
use Carbon\Carbon;

class HeatingCostService
{
    /**
     * Berechnet die Gesamtheizkosten für ein Mietobjekt in einem bestimmten Jahr.
     */
    public function calculateHeatingCostsForYear($rentalObjectId, $year)
    {
        \Log::info("calculateHeatingCostsForYear aufgerufen mit rentalObjectId: $rentalObjectId, Jahr: $year");

        $heatingCosts = HeatingCost::where('rental_object_id', $rentalObjectId)
                                    ->whereYear('created_at', $year)
                                    ->get();

        $totalHeatingCost = 0;
        foreach ($heatingCosts as $cost) {
            $totalHeatingCost += $this->calculateTotalCost($cost);
        }

        return $totalHeatingCost;
    }

    /**
     * Berechnet die Gesamtkosten für eine Heizkostenposition basierend auf Heiztyp und Verbrauch.
     */
    public function calculateTotalCost(HeatingCost $cost)
    {
        if ($cost->heating_type === 'gas') {
            return ($cost->final_reading - $cost->initial_reading) * $cost->price_per_unit;
        } elseif ($cost->heating_type === 'oil') {
            return $cost->total_oil_used * $cost->price_per_unit;
        }

        return 0;
    }

    /**
     * Weist die Heizkosten proportional jedem Mieter eines Mietobjekts für das Jahr zu.
     */
    public function allocateCostToTenant($tenant, $totalHeatingCost, $daysInYear, $tenantDays, $totalUnits, $rentalObjectId, $year)
    {
        $tenants = Tenant::where('rental_object_id', $rentalObjectId)->get();
        $totalUnits = $tenants->sum('unit_count') ?: 1; // Sicherheitswert für Division
        $shareFactor = $tenant->unit_count / $totalUnits;

        // Berechnung der anteiligen Heizkosten für den jeweiligen Mieter
        $tenantHeatingCost = round($totalHeatingCost * ($tenantDays / $daysInYear) * $shareFactor, 2);

        \Log::info("Zuweisung der Heizkosten an Mieter {$tenant->first_name} {$tenant->last_name}: Gesamt: $totalHeatingCost, Anteil: $tenantHeatingCost");

        return $tenantHeatingCost;
    }
}

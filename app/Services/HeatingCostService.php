<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Tenant;
use App\Models\HeatingCost;
use App\Models\RentalObject;

class HeatingCostService
{
    public function calculateHeatingCostsForYear($rentalObjectId, $year)
    {
        \Log::info("calculateHeatingCostsForYear called with rentalObjectId: $rentalObjectId, year: $year");

        // Ensure valid RentalObject is fetched
        $rentalObject = RentalObject::find($rentalObjectId);
        if (!$rentalObject) {
            \Log::warning("Rental object not found for ID: $rentalObjectId");
            return [
                'totalHeatingCost' => 0,
                'baseCost' => 0.0,
                'consumptionCost' => 0.0,
            ];
        }

        // Retrieve heating costs for the specific year and rentalObjectId
        $heatingCosts = HeatingCost::where('rental_object_id', $rentalObjectId)
                                    ->where('year', $year)
                                    ->get();

        // Check if there are heating costs to process
        if ($heatingCosts->isEmpty()) {
            \Log::info("No heating costs found for rentalObjectId: $rentalObjectId, year: $year");
            return [
                'totalHeatingCost' => 0,
                'baseCost' => 0.0,
                'consumptionCost' => 0.0,
            ];
        }

        // Sum up all heating costs
        $totalHeatingCost = 0;
        foreach ($heatingCosts as $cost) {
            $totalHeatingCost += $this->calculateTotalCost($cost);
        }
        \Log::info("Total heating cost calculated: $totalHeatingCost");

        // Split the costs into base and consumption portions
        $baseCost = $totalHeatingCost * ($rentalObject->base_cost_percentage ?? 0.3);
        $consumptionCost = $totalHeatingCost * ($rentalObject->consumption_cost_percentage ?? 0.7);

        return [
            'totalHeatingCost' => $totalHeatingCost,
            'baseCost' => round($baseCost, 2),
            'consumptionCost' => round($consumptionCost, 2),
        ];
    }

    public function calculateTotalCost(HeatingCost $cost)
    {
        // Handle cost calculation based on heating type
        if ($cost->heating_type === 'gas') {
            return ($cost->final_reading - $cost->initial_reading) * $cost->price_per_unit;
        } elseif ($cost->heating_type === 'oil') {
            return $cost->total_oil_used * $cost->price_per_unit;
        }
        return 0;
    }

    public function allocateCostToTenant($tenant, $totalHeatingCost, $daysInYear, $tenantDays, $rentalObjectId, $year)
    {
        \Log::info("Allocating cost for tenant: {$tenant->id} for rentalObjectId: $rentalObjectId, year: $year");

        $rentalObject = RentalObject::find($rentalObjectId);
        if (!$rentalObject) {
            \Log::warning("Rental object not found for ID: $rentalObjectId");
            return [
                'totalTenantCost' => 0,
                'baseCost' => 0.0,
                'consumptionCost' => 0.0,
            ];
        }

        $costs = $this->calculateHeatingCostsForYear($rentalObjectId, $year);
        if ($costs['totalHeatingCost'] == 0) {
            \Log::warning("No heating cost data available for rentalObjectId: $rentalObjectId, year: $year");
            return [
                'totalTenantCost' => 0,
                'baseCost' => 0.0,
                'consumptionCost' => 0.0,
            ];
        }

        $totalBaseUnits = max(1, Tenant::where('rental_object_id', $rentalObjectId)->sum(
            $tenant->billing_type === 'people' ? 'person_count' : 'unit_count'
        ));

        $tenantUnits = $tenant->billing_type === 'people' ? $tenant->person_count : $tenant->unit_count;

        $baseCostPerUnit = $costs['baseCost'] / $totalBaseUnits;
        $tenantBaseCost = round($baseCostPerUnit * $tenantUnits, 2);

        $consumptionCostPerUnit = $costs['consumptionCost'] / $totalBaseUnits;
        $tenantConsumptionCost = round($consumptionCostPerUnit * $tenantUnits, 2);

        $totalTenantCost = $tenantBaseCost + $tenantConsumptionCost;
        \Log::info("Calculated costs for tenant: {$tenant->id} - Total: $totalTenantCost, Base: $tenantBaseCost, Consumption: $tenantConsumptionCost");

        return [
            'totalTenantCost' => $totalTenantCost,
            'baseCost' => $tenantBaseCost,
            'consumptionCost' => $tenantConsumptionCost,
        ];
    }


    public function calculateTotalCostForPeriod($heatingCost, $startDate, $endDate)
    {
        $totalCost = $this->calculateTotalCost($heatingCost);

        // Berechnung der Tage im Jahr (365 oder 366)
        $daysInYear = Carbon::parse($startDate)->year % 4 == 0 ? 366 : 365;
        $daysRented = Carbon::parse($endDate)->diffInDays(Carbon::parse($startDate)) + 1;

        return round(($totalCost / $daysInYear) * $daysRented, 2);
    }
}

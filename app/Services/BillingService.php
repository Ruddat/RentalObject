<?php

namespace App\Services;

use App\Models\HeatingCost;
use App\Models\UtilityCost;
use App\Models\AnnualBillingRecord;

class BillingService
{
    public function calculateCosts($rentalObjectId, $tenantId, $billingPeriod, $prepayment)
    {
        $year = substr($billingPeriod, 0, 4);

        // Retrieve standard costs with utility cost names included
        $standardCosts = AnnualBillingRecord::where('rental_object_id', $rentalObjectId)
            ->where('tenant_id', $tenantId)
            ->where('year', $year)
            ->get()
            ->map(function ($cost) {
                $utilityCost = UtilityCost::find($cost->utility_cost_id);
                return [
                    'utility_cost_id' => $cost->utility_cost_id,
                    'name' => $utilityCost->name,
                    'distribution_key' => $cost->distribution_key,
                    'amount' => $cost->amount,
                ];
            });

        // Retrieve heating costs for the rental object and year with calculated total_cost
        $heatingCosts = HeatingCost::where('rental_object_id', $rentalObjectId)
            ->where('year', $year)
            ->get()
            ->map(function ($heatingCost) {
                // Determine total_used based on heating type
                $totalUsed = $heatingCost->heating_type === 'oil' ? $heatingCost->total_oil_used : $heatingCost->total_gas_used;

                // Calculate total_cost as total_used * price_per_unit
                $totalCost = $totalUsed * $heatingCost->price_per_unit;

                return [
                    'id' => $heatingCost->id,
                    'year' => $heatingCost->year,
                    'total_cost' => $totalCost,
                    'total_used' => $totalUsed,
                    'heating_type' => $heatingCost->heating_type,
                    'price_per_unit' => $heatingCost->price_per_unit,
                    'warm_water_percentage' => $heatingCost->warm_water_percentage,
                ];
            });

        $totalStandardCosts = $standardCosts->sum('amount');
        $totalHeatingCosts = $heatingCosts->sum('total_cost');

        // Calculate total cost and balance due
        $totalCost = $totalStandardCosts + $totalHeatingCosts;
        $balanceDue = $totalCost - $prepayment;

        return [
            'total_cost' => $totalCost,
            'balance_due' => $balanceDue,
            'standard_costs' => $standardCosts,
            'heating_costs' => $heatingCosts,
        ];
    }
}

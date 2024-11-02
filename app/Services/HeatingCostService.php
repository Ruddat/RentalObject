<?php

namespace App\Services;

use App\Models\HeatingCost;
use App\Models\Tenant;
use Carbon\Carbon;

class HeatingCostService
{
    public function calculateHeatingCostsForYear($rentalObjectId, $year)
    {
        \Log::info("calculateHeatingCostsForYear called with rentalObjectId: $rentalObjectId, year: $year");

        $heatingCosts = HeatingCost::where('rental_object_id', $rentalObjectId)
                                    ->whereYear('created_at', $year)
                                    ->get();

        $totalHeatingCost = 0;
        foreach ($heatingCosts as $cost) {
            $totalHeatingCost += $this->calculateTotalCost($cost);
        }

        return $totalHeatingCost;
    }

    public function calculateTotalCost(HeatingCost $cost)
    {
        if ($cost->heating_type === 'gas') {
            return ($cost->final_reading - $cost->initial_reading) * $cost->price_per_unit;
        } elseif ($cost->heating_type === 'oil') {
            return $cost->total_oil_used * $cost->price_per_unit;
        }

        return 0;
    }

    public function allocateCostToTenant($tenant, $totalHeatingCost, $daysInYear, $tenantDays, $totalFactor, $rentalObjectId, $year)
    {
        $tenants = Tenant::where('rental_object_id', $rentalObjectId)->get();

        $allocation = [];

        foreach ($tenants as $tenant) {
            $tenantDays = $this->calculateTenantDays($tenant, $year);
            $tenantShare = ($tenantDays / 365) * ($totalHeatingCost / $tenants->count());

            $allocation[] = [
                'tenant' => $tenant,
                'heating_cost' => round($tenantShare, 2)
            ];
        }

        // Finde den spezifischen Mieter im Array und gib seine Heizkosten zurück
        foreach ($allocation as $item) {
            if ($item['tenant']->id === $tenant->id) {
                return $item['heating_cost'];
            }
        }

        return 0; // Fallback, wenn der Mieter nicht gefunden wird
    }

    private function calculateTenantDays(Tenant $tenant, $year)
    {
        $startOfYear = Carbon::parse("{$year}-01-01");
        $endOfYear = Carbon::parse("{$year}-12-31");

        $tenantStart = Carbon::parse($tenant->start_date)->max($startOfYear);
        $tenantEnd = $tenant->end_date ? Carbon::parse($tenant->end_date)->min($endOfYear) : $endOfYear;

        return $tenantStart->diffInDays($tenantEnd) + 1;
    }
}

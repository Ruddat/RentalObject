<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Tenant;
use App\Models\HeatingCost;
use App\Models\UtilityCost;
use App\Models\RentalObject;
use App\Models\AnnualBillingRecord;

class BillingService
{
    public function calculateCosts($rentalObjectId, $tenantId, $billingPeriod, $prepayment)
    {
        $year = substr($billingPeriod, 0, 4);

        // Standardkosten abrufen und Utility-Kosten prüfen
        $standardCosts = AnnualBillingRecord::where('rental_object_id', $rentalObjectId)
            ->where('tenant_id', $tenantId)
            ->where('year', $year)
            ->get()
            ->map(function ($cost) {
                $utilityCost = UtilityCost::find($cost->utility_cost_id);
                return [
                    'utility_cost_id' => $cost->utility_cost_id,
                    'name' => $utilityCost->name ?? 'Unbekannte Kosten',
                    'distribution_key' => $cost->distribution_key,
                    'amount' => $cost->amount,
                ];
            });

        // Heizkosten berechnen und auf Mieter aufteilen
        $heatingCosts = HeatingCost::where('rental_object_id', $rentalObjectId)
            ->where('year', $year)
            ->get()
            ->map(function ($heatingCost) use ($rentalObjectId, $tenantId, $year) { // $year hier hinzufügen
                $totalUsed = $heatingCost->heating_type === 'oil' ? $heatingCost->total_oil_used : $heatingCost->total_gas_used;
                $totalCost = ($totalUsed ?? 0) * ($heatingCost->price_per_unit ?? 0);

                // Aufteilung der Heizkosten auf den Mieter
                $tenant = Tenant::find($tenantId);
                $distributionKey = $tenant->billing_type;

                $shareFactor = 1;
                $totalShare = 1;

                // Berechnen des Anteils je nach Verteilungsschlüssel
                switch ($distributionKey) {
                    case 'units':
                        $totalShare = Tenant::where('rental_object_id', $rentalObjectId)->sum('unit_count');
                        $shareFactor = $tenant->unit_count;
                        break;
                    case 'people':
                        $totalShare = Tenant::where('rental_object_id', $rentalObjectId)->sum('person_count');
                        $shareFactor = $tenant->person_count;
                        break;
                    case 'area':
                        $totalShare = RentalObject::find($rentalObjectId)->square_meters;
                        $shareFactor = $tenant->square_meters;
                        break;
                }

                // Mietzeitraum des Mieters berücksichtigen
                $startOfYear = Carbon::parse("{$year}-01-01");
                $endOfYear = Carbon::parse("{$year}-12-31");
                $tenantStart = Carbon::parse($tenant->start_date)->max($startOfYear);
                $tenantEnd = $tenant->end_date ? Carbon::parse($tenant->end_date)->min($endOfYear) : $endOfYear;
                $tenantDays = $tenantStart->diffInDays($tenantEnd) + 1;
                $daysInYear = $startOfYear->diffInDays($endOfYear) + 1;

                // Anteilig berechnete Kosten für den Mieter
                $tenantHeatingCost = round(
                    ($totalCost * ($tenantDays / $daysInYear) * ($shareFactor / $totalShare)),
                    2
                );

                return [
                    'id' => $heatingCost->id,
                    'year' => $heatingCost->year,
                    'total_cost' => $tenantHeatingCost,
                    'total_used' => $totalUsed,
                    'heating_type' => $heatingCost->heating_type,
                    'price_per_unit' => $heatingCost->price_per_unit,
                    'warm_water_percentage' => $heatingCost->warm_water_percentage,
                ];
            });

        $totalStandardCosts = $standardCosts->sum('amount');
        $totalHeatingCosts = $heatingCosts->sum('total_cost');

        // Gesamtkosten und fälliger Betrag berechnen
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

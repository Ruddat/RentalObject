<?php

namespace App\Services;

use App\Models\HeatingCost;
use App\Models\AnnualBillingRecord;

class BillingService
{
    public function calculateCosts($rentalObjectId, $tenantId, $billingPeriod, $prepayment)
    {


        // Extrahiere das Jahr aus `billingPeriod`, falls es ein Datumsbereich ist
        $year = substr($billingPeriod, 0, 4);

        // Debug-Ausgabe der Parameter
     //   dd("Rental Object ID:", $rentalObjectId, "Tenant ID:", $tenantId, "Year:", $year, "Prepayment:", $prepayment);


        // Berechnung der Standardkosten für das Mietobjekt und den Mieter
        $standardCosts = AnnualBillingRecord::where('rental_object_id', $rentalObjectId)
                        ->where('tenant_id', $tenantId)
                        ->where('year', substr($billingPeriod, 0, 4)) // Beispiel: nur nach Jahr filtern
                        ->get();

//dd($standardCosts);
        // Berechnung der Heizkosten für das Mietobjekt
        $heatingCosts = HeatingCost::where('rental_object_id', $rentalObjectId)
                        ->where('year', substr($billingPeriod, 0, 4)) // Beispiel: nur nach Jahr filtern
                        ->get();

        $totalStandardCosts = $standardCosts->sum('amount');
        $totalHeatingCosts = $heatingCosts->sum('total_cost'); // Annahme: Berechnung in `total_cost`

        // Gesamtbetrag, Vorauszahlung, Restbetrag
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

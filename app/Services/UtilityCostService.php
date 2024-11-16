<?php

namespace App\Services;

use App\Models\UtilityCost;
use App\Services\UtilityCostService;

class UtilityCostService
{
    public function createDefaultUtilityCosts(int $userId)
    {
        $utilityCosts = [
            [
                'user_id' => $userId,
                'name' => 'Grundsteuer',
                'short_name' => 'GST',
                'category' => 'Betriebskosten',
                'description' => 'Kosten der wiederkehrenden öffentlichen Lasten eines Grundstücks, die je nach Gemeinde variieren können.',
                'amount' => 0,
                'distribution_key' => 'units'
            ],
            // Weitere Einträge ...
        ];

        foreach ($utilityCosts as $cost) {
            UtilityCost::create($cost);
        }
    }
}

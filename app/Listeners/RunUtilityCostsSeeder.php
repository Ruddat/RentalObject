<?php

namespace App\Listeners;

use App\Events\UserVerified;
use App\Services\UtilityCostService;
use Database\Seeders\UtilityCostsSeeder;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class RunUtilityCostsSeeder
{
    protected $utilityCostService;

    public function __construct(UtilityCostService $utilityCostService)
    {
        $this->utilityCostService = $utilityCostService;
    }

    /**
     * Handle the event.
     */
    public function handle(UserVerified $event): void
    {
        $this->utilityCostService->createDefaultUtilityCosts($event->user->id);
    }
}

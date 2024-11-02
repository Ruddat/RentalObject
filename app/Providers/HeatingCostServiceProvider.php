<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HeatingCostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(HeatingCostService::class, function ($app) {
            return new HeatingCostService();
        });
      //dd('Registering HeatingCostService');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

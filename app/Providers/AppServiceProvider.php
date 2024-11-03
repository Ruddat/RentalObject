<?php

namespace App\Providers;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Route::middleware('maintenance')->group(function () {
            Route::post('/newsletter-signup', 'App\Http\Controllers\NewsletterController@signup');
        });

    }
}

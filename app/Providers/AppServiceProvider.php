<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\SysSetting;  // Richtiges Modell importieren

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Hier können benötigte Services registriert werden
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::middleware('maintenance')->group(function () {
            Route::post('/newsletter-signup', 'App\Http\Controllers\NewsletterController@signup');
        });

        // Überprüfen, ob die Tabelle 'settings' existiert
        if (Schema::hasTable('sys_settings')) {
            // Verwende das korrekte Modell, um Einstellungen zu laden
            $settings = SysSetting::all()->pluck('value', 'key')->toArray();

            // Speichere die Einstellungen in der app-Konfiguration
            config(['app.settings' => $settings]);
        }

        App::setLocale('de'); // Setzt die Anwendungssprache auf Deutsch
    }
}

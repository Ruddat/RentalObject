<?php

namespace App\Providers;

use App\Models\ModLink;
use App\Models\ModCategory;
use App\Events\UserVerified;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Listeners\RunUtilityCostsSeeder;
use App\Models\SysSetting;  // Richtiges Modell importieren
use App\Http\Controllers\Backend\Admin\PagesSystem\FooterLinksController;

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

        // Überprüfen, ob die Tabelle 'sys_settings' existiert
        if (Schema::hasTable('sys_settings')) {
            // Verwende das korrekte Modell, um Einstellungen zu laden
            $settings = SysSetting::all()->pluck('value', 'key')->toArray();

            // Speichere die Einstellungen in der app-Konfiguration
            config(['app.settings' => $settings]);
        }

            // Überprüfen, ob ein Cookie gesetzt ist und die Spracheinstellung speichern

            // Sprache aus der Session setzen
        $locale = Session::get('locale', config('app.locale'));
      // dd($locale);

        // App::setLocale($locale);

    // Manuelle Registrierung des Listeners
    Event::listen(UserVerified::class, RunUtilityCostsSeeder::class);

    view()->composer('rentalobj.layout.partials.footer', function ($view) {
        // Kategorien mit aktiven Links laden
        $footerLinks = ModCategory::with(['links' => function ($query) {
            $query->where('active', true);
        }])->get();

        $view->with('footerLinks', $footerLinks);
    });

}

}

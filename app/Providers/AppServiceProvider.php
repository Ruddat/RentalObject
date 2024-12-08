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
use App\Services\SettingLoaderService; // Importiere den neuen Service
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
    public function boot(SettingLoaderService $settingLoaderService): void
    {
        // Lädt die Einstellungen mithilfe des neuen Services
        //$settingLoaderService->load();

        // Route für Wartungsmodus
        Route::middleware('maintenance')->group(function () {
            Route::post('/newsletter-signup', 'App\Http\Controllers\NewsletterController@signup');
        });

        // Sprache aus der Session setzen
        $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);

        // Event-Listener manuell registrieren
        Event::listen(UserVerified::class, RunUtilityCostsSeeder::class);

        // View Composer für Footer
        view()->composer('rentalobj.layout.partials.footer', function ($view) {
            // Kategorien mit aktiven Links laden
            $footerLinks = ModCategory::with(['links' => function ($query) {
                $query->where('active', true);
            }])->get();

            $view->with('footerLinks', $footerLinks);
        });
    }
}

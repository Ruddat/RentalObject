<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Services\AutoTranslationService;
use App\Repositories\TranslationRepository;

class AutoTranslationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('autotranslate', function ($app) {
            return new AutoTranslationService($app->make(TranslationRepository::class));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('autotranslate', function ($expression) {
            // Determine the default locale if not provided
            list($text, $locale) = array_pad(explode(',', $expression), 2, null);

            $text = trim($text, "' ");
            $locale = $locale ? trim($locale, "' ") : 'App::getLocale()';

            return "<?php echo app('autotranslate')->trans($text, $locale); ?>";
        });

      //  Log::info("Aktuelle Sprache: " . App::getLocale());

    }
}

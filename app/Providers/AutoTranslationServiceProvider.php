<?php

namespace App\Providers;

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
            list($text, $locale) = explode(',', $expression);
            $text = trim($text, "' ");
            $locale = trim($locale, "' ");

            return "<?php echo app('autotranslate')->trans($text, $locale); ?>";
        });
    }
}

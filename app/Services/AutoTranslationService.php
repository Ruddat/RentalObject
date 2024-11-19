<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Repositories\TranslationRepository;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AutoTranslationService
{
    protected $translationRepository;
    protected $googleTranslate;

    public function __construct(TranslationRepository $translationRepository)
    {
        $this->translationRepository = $translationRepository;
        $this->googleTranslate = new GoogleTranslate();
    }

    public function trans($key, $locale = null)
    {
        // Get the locale from session or default to the configured locale
        $locale = $locale ?? Cookie::get('locale', config('app.locale'));

        // Überprüfe, ob $locale ein gültiger Sprachcode ist
        $allowedLocales = config('app.available_locales');
        if (!in_array($locale, array_keys($allowedLocales))) {
            $locale = config('app.fallback_locale', 'en');
        }

        // Set the locale in the app
        App::setLocale($locale);

        // Check for cached translation first
        $cacheKey = $this->getCacheKey($key, $locale);
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        // Search for the translation in the database
        $translation = $this->translationRepository->findTranslation($key, $locale);

        // If the translation is found, cache and return it
        if ($translation) {
            Cache::put($cacheKey, $translation->text, now()->addHours(24)); // Cache for 24 hours
            return $translation->text;
        }

        // If not found, create the translation via Google Translate and save it
        $translatedText = $this->translateAndSave($key, $locale);

        // Cache the translated text
        Cache::put($cacheKey, $translatedText, now()->addHours(24));

        return $translatedText;
    }


    protected function translateAndSave($key, $locale)
    {
        try {
            // Sicherstellen, dass $locale ein gültiger Sprachcode ist
            $allowedLocales = config('app.available_locales');
            if (!in_array($locale, array_keys($allowedLocales))) {
                throw new \Exception("Ungültiger Sprachcode: " . $locale);
            }
    
            // Set target and source language for translation
            $this->googleTranslate->setTarget($locale);
            $this->googleTranslate->setSource('auto'); // Auto-detect source language
    
            // Translate the key
            $translatedText = $this->googleTranslate->translate($key);
    
            // Save the translation in the database
            $this->translationRepository->saveTranslation($key, $locale, $translatedText);
    
            // Return the translated text
            return $translatedText;
        } catch (\Exception $e) {
            // Log the error and fallback to the original key
            Log::error("Translation failed: " . $e->getMessage());
            return $key;
        }
    }

    public function addTranslation($key, $locale, $text)
    {
        // Save the translation in the database
        return $this->translationRepository->saveTranslation($key, $locale, $text);
    }

    protected function getCacheKey($key, $locale)
    {
        return "translation_" . md5("{$locale}_{$key}");
    }
}

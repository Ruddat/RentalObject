<?php

namespace App\Repositories;

use App\Models\AutoTranslations;
use Illuminate\Support\Facades\Log;


class TranslationRepository
{
    public function findTranslation($key, $locale)
    {
        return AutoTranslations::where('key', $key)
                              ->where('locale', $locale)
                              ->first();
                              Log::info('Locale used for translation:', ['locale' => $locale]);

    }

    public function saveTranslation($key, $locale, $text)
    {
        return AutoTranslations::updateOrCreate(
            ['key' => $key, 'locale' => $locale],
            ['text' => $text]
        );

        Log::info('Locale used for translation:', ['locale' => $locale]);

    }
}

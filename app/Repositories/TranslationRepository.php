<?php

namespace App\Repositories;

use App\Models\AutoTranslations;


class TranslationRepository
{
    public function findTranslation($key, $locale)
    {
        return AutoTranslations::where('key', $key)
                          ->where('locale', $locale)
                          ->first();
    }

    public function saveTranslation($key, $locale, $text)
    {
        return AutoTranslations::updateOrCreate(
            ['key' => $key, 'locale' => $locale],
            ['text' => $text]
        );
    }
}

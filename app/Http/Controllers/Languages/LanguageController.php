<?php

namespace App\Http\Controllers\Languages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $locale = $request->input('lang');

        $locale = $request->input('lang');

        if (array_key_exists($locale, config('app.available_locales'))) {
            // Setze die Sprache in einem Cookie, das für ein Jahr gültig ist
            return redirect()->back()->withCookie(cookie()->forever('locale', $locale));
        }

        // Seite neu laden
        return redirect()->back();
    }
}

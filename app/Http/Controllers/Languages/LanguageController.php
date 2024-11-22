<?php

namespace App\Http\Controllers\Languages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $locale = $request->input('lang');

        // Prüfen, ob die Sprache in den verfügbaren Sprachen definiert ist
        if (array_key_exists($locale, Config::get('app.available_locales'))) {
            // Setze die Sprache in einem Cookie, das für ein Jahr gültig ist
            return redirect()->back()->withCookie(cookie()->forever('locale', $locale));
        }

        // Wenn die Sprache ungültig ist, Seite einfach neu laden
        return redirect()->back()->with('error', 'Invalid language selected');
    }
}

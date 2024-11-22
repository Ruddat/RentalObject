<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->input('lang');


        // Falls Sprache aus Anfrage kommt, speichern
        if ($request->has('lang')) {
            Session::put('locale', $locale);
            Cookie::queue('locale', $locale, 60 * 24 * 365); // 1 Jahr gültig
        }
        // Sprache in der App setzen
        App::setLocale($locale);

        return $next($request);
    }
}

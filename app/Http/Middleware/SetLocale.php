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
        $test = $request->input('lang');
        //dd($test);
        // Sprache aus der Session oder Konfiguration laden
        $locale = Session::get('locale', config('app.locale'));
        $locale = Cookie::get('locale', config('app.locale'));

//dd($locale);
        // Sprache in der App setzen
        App::setLocale($test);

        return $next($request);
    }
}

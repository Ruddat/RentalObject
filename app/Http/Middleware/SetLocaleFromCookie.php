<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLocaleFromCookie
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        // Hole das Cookie 'locale' oder verwende die Standard-Locale aus der Konfiguration
        $locale = Cookie::get('locale', config('app.locale'));
        App::setLocale($locale);

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;

class PreventRequestsDuringMaintenance
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        'newsletter-signup', // Hier die Newsletter-Route hinzufügen
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Prüfen, ob die App im Wartungsmodus ist und ob die angeforderte URI ausgenommen werden soll
        if (app()->isDownForMaintenance() && !$this->inExceptArray($request)) {
            throw new MaintenanceModeException(
                time(),
                file_get_contents(storage_path('framework/down')),
                ''
            );
        }

        return $next($request);
    }

    /**
     * Überprüfen, ob die Anfrage-URL von der Wartung ausgeschlossen ist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function inExceptArray(Request $request): bool
    {
        foreach ($this->except as $except) {
            if ($request->is($except)) {
                return true;
            }
        }

        return false;
    }
}

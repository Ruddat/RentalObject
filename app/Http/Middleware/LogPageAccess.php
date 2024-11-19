<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageAccessLog;
use Symfony\Component\HttpFoundation\Response;

class LogPageAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = auth()->check() ? auth()->id() : null;

        // Überprüfen, ob ein Eintrag mit der gleichen URL, Methode, IP und User-Agent bereits existiert
        $log = PageAccessLog::where('url', $request->fullUrl())
            ->where('method', $request->method())
            ->where('ip', $request->ip())
            ->where('user_agent', $request->userAgent())
            ->where('user_id', $userId)
            ->first();

        if ($log) {
            // Falls ein Eintrag existiert, den Zähler erhöhen
            $log->increment('count');
        } else {
            // Andernfalls einen neuen Eintrag erstellen
            PageAccessLog::create([
                'url' => $request->fullUrl(),
                'method' => $request->method(),
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'user_id' => $userId,
                'count' => 1,
            ]);
        }
        \Log::info('Middleware debugging: Is user authenticated?', [
            'auth_check' => auth()->check(),
            'user_id' => auth()->id(),
            'session_data' => session()->all(),
        ]);


        return $next($request);
    }
}

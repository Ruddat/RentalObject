<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\SetLocaleFromCookie;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            // Standard Web-Routen
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // RentalObj-Routen
            Route::middleware('web')
                //->prefix('rentalobj') // Optional: Präfix für Rentalobj-Routen
                ->group(base_path('routes/rentalobj.php'));

            // Admin-Routen mit Middleware
            Route::middleware(['web'])
                ->prefix('manager') // Optional: Präfix für Admin-Routen
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->append(SetLocale::class);
      //$middleware->append(SetLocaleFromCookie::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();

<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Routing\Events\RouteMatched;

class LogPageAccessListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RouteMatched $event)
    {
      //  Log::info('Seitenzugriff:', [
      //      'url' => $event->request->fullUrl(),
     //       'method' => $event->request->method(),
     //       'ip' => $event->request->ip(),
    //        'user_agent' => $event->request->userAgent(),
    //        'user_id' => auth()->id(), // Falls der Benutzer eingeloggt ist
    //    ]);
    }
}

<?php

namespace App\Providers;

use App\Models\SysBackups;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Spatie\Backup\Events\BackupZipWasCreated;

class BackupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        // Register an event listener for BackupZipWasCreated
        Event::listen(BackupZipWasCreated::class, function (BackupZipWasCreated $event) {
            SysBackups::create([
                'file_name' => basename($event->pathToZip),       // Store only the filename
                'path' => 'private/' . config('app.name') . '/' . basename($event->pathToZip), // Store relative path
                'created_at' => now(),
            ]);
        });
    }
}

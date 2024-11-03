<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\SysBackups;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use Spatie\Backup\Events\BackupZipWasCreated;

class BackupCron extends Command
{
    protected $signature = 'backup:cron';
    protected $description = 'Executes a database backup and stores it using Spatie Backup';

    public function handle()
    {
        $this->info('Starting database backup...');

        try {
            // Set up an event listener for the backup completion
            Event::listen(BackupZipWasCreated::class, function (BackupZipWasCreated $event) {
                // Use the event data to get the file path
                SysBackups::create([
                    'file_name' => basename($event->pathToZip),
                    'path' => $event->pathToZip,
                    'created_at' => Carbon::now(),
                ]);
            });

            // Run the Spatie backup command
            $this->call('backup:run');

            $this->info('Backup completed and saved to database successfully!');
            Log::info("Database backup completed and logged at " . Carbon::now());

        } catch (\Exception $e) {
            $this->error('Backup failed: ' . $e->getMessage());
            Log::error("Database backup failed at " . Carbon::now() . ' with error: ' . $e->getMessage());
        }
    }
}

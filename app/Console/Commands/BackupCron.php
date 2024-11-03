<?php

namespace App\Console\Commands;

use DB;
use Exception;
use Carbon\Carbon;
use App\Models\SysBackups;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Spatie\Backup\Tasks\Backup\BackupJobFactory;

class BackupCron extends Command
{
    protected $signature = 'backup:cron';
    protected $description = 'Executes a database backup and stores it using Spatie Backup';

    public function handle()
    {
        $this->info('Starting database backup...');

        try {
            $this->call('backup:run');

            // Retrieve the latest backup file from the `private/RentalObject` directory
            $latestBackup = collect(Storage::disk('private')->files('RentalObject'))->last();

            // Save backup details in the SysBackups table
            SysBackups::create([
                'file_name' => basename($latestBackup),
                'path' => $latestBackup,
                'created_at' => Carbon::now(),
            ]);

            $this->info('Backup completed and saved to database successfully!');
            Log::info("Database backup completed and logged at " . Carbon::now());

        } catch (\Exception $e) {
            $this->error('Backup failed: ' . $e->getMessage());
            Log::error("Database backup failed at " . Carbon::now() . ' with error: ' . $e->getMessage());
        }
    }
}

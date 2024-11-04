<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class BackupCron extends Command
{
    protected $signature = 'backup:cron';
    protected $description = 'Executes a database backup and stores it using Spatie Backup';

    public function handle()
    {
        $this->info('Starting database backup...');

        try {
            // Run the Spatie backup command
            $this->call('backup:run');

            $this->info('Backup completed and saved to database successfully!');
            Log::info("Database backup completed and logged at " . now());

        } catch (Exception $e) {
            $this->error('Backup failed: ' . $e->getMessage());
            Log::error("Database backup failed at " . now() . ' with error: ' . $e->getMessage());
        }
    }
}

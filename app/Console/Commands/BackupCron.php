<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use DB;

class BackupCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executes a database backup and stores it in a specified location';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting database backup...');

        // Set the backup file path and name with a timestamp
        $backupFile = 'backups/db-backup-' . Carbon::now()->format('Y-m-d_H-i-s') . '.sql';

        // Execute the mysqldump command
        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');

        // Construct the mysqldump command
        $command = "mysqldump -u{$username} -p{$password} -h{$host} {$database} > " . storage_path($backupFile);

        // Run the command and handle errors
        $result = null;
        $output = null;
        exec($command, $output, $result);

        if ($result === 0) {
            $this->info('Backup completed successfully!');
            Log::info("Database backup completed successfully at " . Carbon::now());

            // Optionally, move the backup to a cloud storage (e.g., S3, if configured)
            Storage::disk('local')->put($backupFile, file_get_contents(storage_path($backupFile)));
        } else {
            $this->error('Backup failed.');
            Log::error("Database backup failed at " . Carbon::now());
        }
    }
}

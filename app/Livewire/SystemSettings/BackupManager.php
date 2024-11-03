<?php

namespace App\Livewire\SystemSettings;

use Livewire\Component;
use App\Models\SysBackups;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BackupManager extends Component
{
    public function render()
    {
        return view('livewire.system-settings.backup-manager', [
            'backups' => SysBackups::all(),
        ]);
    }

    public function deleteBackup($id)
    {
        $backup = SysBackups::findOrFail($id);
        Storage::disk('local')->delete($backup->path);
        $backup->delete();
        session()->flash('message', 'Backup deleted successfully.');
    }

    public function downloadBackup($id)
    {
        $backup = SysBackups::findOrFail($id);
        return Storage::disk('local')->download($backup->path);
    }

    public function startBackup()
    {
        Artisan::call('backup:cron');
        session()->flash('message', 'Backup initiated successfully.');
    }
}

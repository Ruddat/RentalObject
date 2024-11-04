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
        // Use the 'private' disk to delete the backup file
        Storage::disk('local')->delete($backup->path);
        $backup->delete();
        session()->flash('message', 'Backup deleted successfully.');
    }

    public function downloadBackup($id)
    {
        $backup = SysBackups::findOrFail($id);

//dd($backup); // Überprüfen Sie, ob der Pfad korrekt ist

        if (!Storage::disk('local')->exists($backup->path)) {
  dd($backup->path); // Überprüfen Sie, ob der Pfad korrekt ist
            session()->flash('message', 'Datei nicht gefunden: ' . $backup->path);
            return;
        }

        // Weiterleitung zum Download-Controller
        return redirect()->route('download.backup', ['id' => $id]);
    }


    public function startBackup()
    {
        Artisan::call('backup:cron');
        session()->flash('message', 'Backup initiated successfully.');
    }
}

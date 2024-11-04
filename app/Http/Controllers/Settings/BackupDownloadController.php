<?php

namespace App\Http\Controllers\Settings;

use App\Models\SysBackups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BackupDownloadController extends Controller
{
    public function download($id)
    {
        $backup = SysBackups::findOrFail($id);

        // Absoluter, standardisierter Pfad
        $absolutePath = realpath(Storage::disk('local')->path($backup->path));

        //dd($absolutePath); // Überprüfen Sie, ob der Pfad jetzt korrekt ist

        if (file_exists($absolutePath)) {
            return response()->download($absolutePath);
        }

        return abort(404, 'Datei nicht gefunden');
    }
}

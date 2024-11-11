<?php

namespace App\Http\Controllers\BlogSystem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|max:5120', // 5MB maximale Dateigröße
        ]);

//dd($request->all());


        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filePath = $file->store('public/images'); // Speichern im Verzeichnis `storage/app/public/images`
            $url = Storage::url($filePath); // URL des Bildes

            // Rückgabe im erforderlichen Format für CKEditor
            return response()->json([
                'url' => $url
            ]);
        }

        return response()->json(['error' => 'Kein Bild hochgeladen'], 400);
    }
}

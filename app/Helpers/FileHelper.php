<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileHelper
{
    /**
     * Generiere eine sichere URL für eine Datei im öffentlichen Speicher.
     *
     * @param string $filePath
     * @return string
     */
    public static function getPublicUrl(string $filePath): string
    {
        // Prüfe, ob die Datei im öffentlichen Bereich existiert
        if (Storage::disk('public')->exists($filePath)) {
            return Storage::url($filePath);
        }

        // Prüfe, ob die Datei im privaten Speicher existiert und generiere eine URL
        if (Storage::exists($filePath)) {
            return asset('storage/' . $filePath);
        }

        // Fallback auf ein Standardbild
        return asset('images/placeholder.png');
    }

    /**
     * Überprüfe, ob eine Datei existiert.
     *
     * @param string $filePath
     * @return bool
     */
    public static function fileExists(string $filePath): bool
    {
        return Storage::disk('public')->exists($filePath);
    }


    public static function moveToPublic(string $tempPath, string $destinationPath): bool
    {
        if (!Storage::exists($tempPath)) {
            \Log::error("Temporary file not found: $tempPath");
            return false;
        }

        if (Storage::disk('public')->exists($destinationPath)) {
            \Log::warning("File already exists in destination: $destinationPath");
        }

        return Storage::move($tempPath, $destinationPath);
    }


}

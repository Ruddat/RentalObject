<?php

namespace App\Services;

use Log;

class PanoramaGeneratorService
{
    public static function stitchImages(array $imagePaths, $outputPath)
    {
        $ptoGenCommand = '"C:\\Program Files\\Hugin\\bin\\pto_gen"';
        $nonaCommand = '"C:\\Program Files\\Hugin\\bin\\nona"';

        // Define the path for the .pto project file
        $ptoFile = storage_path('app/panorama_project.pto');

// Construct nona command with correct file paths
$stitchCommand = $nonaCommand . ' -o "' . storage_path('app/public/panorama/final_panorama.jpg') . '" "' . $ptoFile . '"';
exec($stitchCommand, $output, $returnVar);

if ($returnVar !== 0) {
    \Log::warning('Fehler beim Stitching des Panoramas. Befehl: ' . $stitchCommand . ', Ausgabe: ' . implode("\n", $output));
    return null;
}

        if ($returnVar !== 0) {
            \Log::warning('Fehler beim Erstellen der .pto-Datei. Befehl: ' . $command);
            return null;
        }

        $outputImage = storage_path('app/public/' . $outputPath);
        $stitchCommand = escapeshellcmd("$nonaCommand -o $outputImage $ptoFile");
        exec($stitchCommand, $output, $resultCode);

        if ($resultCode !== 0) {
            Log::warning("Fehler beim Stitching des Panoramas. Befehl: $stitchCommand, Ausgabe: " . implode("\n", $output));
            return null;
        }

        unlink($ptoFile);
        return $outputImage;
    }
}

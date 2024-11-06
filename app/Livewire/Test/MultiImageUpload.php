<?php

namespace App\Livewire\Test;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Services\PanoramaGeneratorService;

class MultiImageUpload extends Component
{
    use WithFileUploads;

    public $photos = [];
    public $panoramaPath; // Füge eine Variable hinzu, um den Panorama-Pfad zu speichern

    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:10240',
        ]);

        $imagePaths = [];

        foreach ($this->photos as $photo) {
            $path = $photo->store('uploads/panorama', 'public');
            $imagePaths[] = Storage::disk('public')->path($path);
        }

        // Startet den Panorama-Stitching-Prozess
        $outputPath = 'panorama/final_panorama.jpg';
        $outputImage = PanoramaGeneratorService::stitchImages($imagePaths, $outputPath);

        // Setze den Pfad zum Panorama
        $this->panoramaPath = Storage::url($outputPath);

        // Event auslösen, um das Panorama anzuzeigen
        $this->dispatch('panoramaCreated', ['panoramaPath' => $this->panoramaPath]);
    }

    public function render()
    {
        return view('livewire.test.multi-image-upload');
    }
}

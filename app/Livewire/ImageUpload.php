<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $photos = []; // Array zum Speichern der Bilder

    protected $rules = [
        'photos.*' => 'image|max:1024', // Maximale Bildgröße 1MB
    ];

    public function uploadPhotos()
    {
        $this->validate();

        foreach ($this->photos as $photo) {
            // Bild speichern
            $photo->store('photos', 'public');
        }

        // Reset für das Array nach dem Hochladen
        $this->photos = [];

        session()->flash('message', 'Photos uploaded successfully!');
    }

    public function removePhoto($index)
    {
        unset($this->photos[$index]);
        $this->photos = array_values($this->photos);
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}

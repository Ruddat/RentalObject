<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;
use Livewire\WithFileUploads;

class MediaUploadComponent extends Component
{
    use WithFileUploads;

    public $photos = [];

    protected $rules = [
        'photos.*' => 'image|max:5120', // Max 5MB pro Foto
    ];

    public function updatedPhotos()
    {
        $this->validate();
    }

    public function removePhoto($index)
    {
        unset($this->photos[$index]);
        $this->photos = array_values($this->photos); // Reindexiere das Array
    }

    public function uploadPhotos()
    {
        $this->validate();

        $uploadedFiles = [];

        foreach ($this->photos as $photo) {
            $filePath = $photo->store('uploads', 'public');
            $uploadedFiles[] = [
                'path' => $filePath,
                'order' => array_search($photo, $this->photos), // Reihenfolge speichern
            ];
        }

        // Fotos als Event an die Hauptkomponente senden
        $this->dispatch('photosUploaded', $uploadedFiles);

        $this->reset('photos');
        session()->flash('message', 'Photos uploaded successfully!');
    }

    public function updateOrder($order)
    {
        // Überprüfe, ob alle Indizes existieren
        if (!is_array($order) || count($order) !== count($this->photos)) {
            session()->flash('error', 'Invalid photo order');
            return;
        }

        $this->photos = collect($order)
            ->filter(fn($index) => isset($this->photos[$index])) // Sicherstellen, dass der Index existiert
            ->map(fn($index) => $this->photos[$index])
            ->values() // Neu indizieren
            ->toArray();
    }

    public function render()
    {
        return view('livewire.backend.property-system.media-upload-component');
    }
}

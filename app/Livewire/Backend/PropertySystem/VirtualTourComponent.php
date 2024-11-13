<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;
use Livewire\WithFileUploads;

class VirtualTourComponent extends Component
{
    use WithFileUploads;

    public $tourType = 'embedded_code';
    public $embeddedCode;
    public $tourImages = []; // Mehrere Bilder hochladen

    protected $rules = [
        'tourType' => 'required|string|in:embedded_code,image_upload',
        'embeddedCode' => 'nullable|string',
        'tourImages.*' => 'nullable|file|mimes:jpg,jpeg,png|max:10240', // Maximal 10 MB pro Bild
    ];

    public function submitVirtualTour()
    {
        $this->validate();

        $imagePaths = [];
        if ($this->tourImages) {
            foreach ($this->tourImages as $image) {
                $imagePaths[] = $image->store('virtual-tours', 'public');
            }
        }

        $this->dispatch('virtualTourUpdated', [
            'tourType' => $this->tourType,
            'embeddedCode' => $this->embeddedCode,
            'tourImagePaths' => $imagePaths,
        ]);

        // Rückmeldung nach dem Speichern
        session()->flash('message', 'Virtual Tour saved successfully.');

        // Felder zurücksetzen
        $this->reset(['embeddedCode', 'tourImages']);
    }

    public function render()
    {
        return view('livewire.backend.property-system.virtual-tour-component');
    }
}

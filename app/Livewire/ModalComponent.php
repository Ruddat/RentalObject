<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public $externalTourLink;

    public function saveExternalTour()
    {
        $this->validate([
            'externalTourLink' => 'required|url',
        ]);

        // Logik zum Speichern des Links
        // ...

        // Modal schließen
        $this->dispatch('closeModal', ['modalId' => 'externalTourModal']);

        session()->flash('success', '360° Rundgang erfolgreich gespeichert!');
    }

    public function render()
    {
        return view('livewire.modal-component');
    }
}

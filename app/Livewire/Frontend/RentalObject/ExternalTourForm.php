<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;

class ExternalTourForm extends Component
{
    public $externalTourLink; // Gespeicherter Link
    public $isEditing = false; // Steuert die Sichtbarkeit des Formulars

    protected $rules = [
        'externalTourLink' => 'required|url',
    ];

    /**
     * Speichert den Rundgang-Link und beendet den Bearbeitungsmodus.
     */
    public function saveTour()
    {
        $this->validate();

        // Sende Event mit dem gespeicherten Link
        $this->dispatch('handleTourLinkUpdate', $this->externalTourLink);

        // Speichere die Daten (Datenbank-Speicherung hier hinzufügen, falls nötig)
        session()->flash('success', '360° Rundgang erfolgreich gespeichert!');

        $this->isEditing = false; // Bearbeitungsmodus beenden
    }

    /**
     * Aktiviert den Bearbeitungsmodus.
     */
    public function editTour()
    {
        // Falls kein Rundgang existiert, initialisiere Felder für ein neues.
        if (!$this->externalTourLink) {
            $this->externalTourLink = '';
        }

        $this->isEditing = true; // Bearbeitungsmodus aktivieren
    }

    /**
     * Löscht den Rundgang-Link und beendet den Bearbeitungsmodus.
     */
    public function deleteTour()
    {
        $this->externalTourLink = null; // Link entfernen
        $this->isEditing = false; // Bearbeitungsmodus deaktivieren
        session()->flash('success', '360° Rundgang erfolgreich gelöscht!');
    }

    /**
     * Abbrechen der Bearbeitung.
     */
    public function cancelEditing()
    {
        $this->isEditing = false; // Bearbeitungsmodus deaktivieren
    }

    public function render()
    {
        return view('livewire.frontend.rental-object.external-tour-form');
    }
}

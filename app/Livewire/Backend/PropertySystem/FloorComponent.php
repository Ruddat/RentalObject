<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;
use Livewire\WithFileUploads;

class FloorComponent extends Component
{
    use WithFileUploads;

    public $floorName;
    public $floorPrice;
    public $pricePostfix;
    public $floorSize;
    public $sizePostfix;
    public $bedrooms;
    public $bathrooms;
    public $description;
    public $floorPlan; // Für den Datei-Upload
    public $showForm = false; // Steuerung der Sichtbarkeit des Formulars

    protected $rules = [
        'floorName' => 'required|string|max:255',
        'floorPrice' => 'nullable|numeric',
        'pricePostfix' => 'nullable|string|max:20',
        'floorSize' => 'nullable|numeric',
        'sizePostfix' => 'nullable|string|max:20',
        'bedrooms' => 'nullable|integer',
        'bathrooms' => 'nullable|integer',
        'description' => 'nullable|string',
        'floorPlan' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240', // Maximal 10 MB
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function addFloor()
    {
        $this->validate();

        // Speichern der Datei, falls hochgeladen
        $floorPlanPath = $this->floorPlan ? $this->floorPlan->store('floor-plans', 'public') : null;

        // Floor-Daten inklusive Dateipfad an die Hauptkomponente senden
        $this->dispatch('floorAdded', [
            'floorName' => $this->floorName,
            'floorPrice' => $this->floorPrice,
            'pricePostfix' => $this->pricePostfix,
            'floorSize' => $this->floorSize,
            'sizePostfix' => $this->sizePostfix,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'description' => $this->description,
            'floorPlanPath' => $floorPlanPath,
        ]);

        // Felder zurücksetzen und Formular ausblenden
        $this->reset(['floorName', 'floorPrice', 'pricePostfix', 'floorSize', 'sizePostfix', 'bedrooms', 'bathrooms', 'description', 'floorPlan']);
        // Rückmeldung nach dem Speichern
        session()->flash('message', 'Floor saved successfully.');
        $this->showForm = false;
    }

    public function render()
    {
        return view('livewire.backend.property-system.floor-component');
    }
}

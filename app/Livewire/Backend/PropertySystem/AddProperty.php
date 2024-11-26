<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;

class AddProperty extends Component
{
    public $propertyData = [];
    public $priceData = [];
    public $floors = []; // Array für alle hinzugefügten Etagen
    public $selectedAmenities = [];
    public $virtualTourData = [];
    public $videoData = [];
    public $additionalInfo = [];
    public $uploadedPhotos = [];
    public $isSaved = false; // Um zu überprüfen, ob die Eingaben gespeichert wurden

    protected $listeners = [
        'mediaUploaded',
        'propertyInfoUpdated',
        'priceAdded',
        'additionalInfoAdded',
        'amenitiesUpdated',
        'virtualTourUpdated',
        'videoUpdated',
        'floorAdded',
        'agentInfoUpdated',
        'photosUploaded' => 'handlePhotosUploaded',
    ];


    public function handlePhotosUploaded($photos)
    {
        $this->uploadedPhotos = $photos;
    }

    public function videoUpdated($data)
    {
        $this->videoData = $data;
    }

    public function virtualTourUpdated($data)
    {
        $this->virtualTourData = $data;
    }

    public function amenitiesUpdated($amenities)
    {
        $this->selectedAmenities = $amenities;
    }

    public function propertyInfoUpdated($data)
    {
        $this->propertyData = array_merge($this->propertyData, $data);
    }

    public function priceUpdated($data)
    {
        $this->priceData = array_merge($this->priceData, $data);
    }

    public function additionalInfoAdded($data)
    {
        $this->additionalInfo = $data;
    }

    public function floorAdded($floor)
    {
        $this->floors[] = $floor;
    }

    public function removeFloor($index)
    {
        unset($this->floors[$index]);
        $this->floors = array_values($this->floors); // Reindexiert das Array
    }

    public function submitProperty()
    {
        if (!auth()->check()) {
            session()->flash('error', 'You must be logged in to submit a property.');
            return;
        }

        // Validierung und Speicherung der Daten
      //  $this->validate([
          //  'propertyData.name' => 'required|string|max:255',
         //   'priceData.amount' => 'required|numeric',
            // Füge weitere Validierungsregeln hinzu
     //   ]);

        // Simulierte Speicherung der Daten
        // Hier kannst du Daten in der Datenbank speichern
        foreach ($this->uploadedPhotos as $photo) {
            // Logik zum Speichern von Fotos in der Datenbank oder Weiterverarbeitung
        }

        session()->flash('message', 'Property added successfully with photos!');
        $this->isSaved = true; // Zeigt an, dass die Daten erfolgreich gespeichert wurden
    }

    public function render()
    {
        return view('livewire.backend.property-system.add-property', [
            'isSaved' => $this->isSaved,
        ]);
    }
}

<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;

class AdditionalInformationComponent extends Component
{
    public $propertyType;
    public $propertyStatus;
    public $propertyLabel;
    public $size;
    public $landArea;
    public $propertyId;
    public $rooms;
    public $bedrooms;
    public $bathrooms;
    public $garages;
    public $garageSize;
    public $yearBuilt;

    protected $rules = [
        'propertyType' => 'required|string|max:50',
        'propertyStatus' => 'required|string|max:50',
        'propertyLabel' => 'nullable|string|max:50',
        'size' => 'nullable|numeric',
        'landArea' => 'nullable|numeric',
        'propertyId' => 'nullable|string|max:20',
        'rooms' => 'nullable|integer',
        'bedrooms' => 'nullable|integer',
        'bathrooms' => 'nullable|integer',
        'garages' => 'nullable|integer',
        'garageSize' => 'nullable|numeric',
        'yearBuilt' => 'nullable|integer',
    ];

    public function submitAdditionalInfo()
    {
        $this->validate();

        // Informationen an die Hauptkomponente senden
        $this->dispatch('additionalInfoAdded', [
            'propertyType' => $this->propertyType,
            'propertyStatus' => $this->propertyStatus,
            'propertyLabel' => $this->propertyLabel,
            'size' => $this->size,
            'landArea' => $this->landArea,
            'propertyId' => $this->propertyId,
            'rooms' => $this->rooms,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'garages' => $this->garages,
            'garageSize' => $this->garageSize,
            'yearBuilt' => $this->yearBuilt,
        ]);

        // Felder zurücksetzen
        $this->reset();
    }

    public function render()
    {
        return view('livewire.backend.property-system.additional-information-component');
    }
}

<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;

class AmenitiesComponent extends Component
{
    public $amenities = [];

    public $availableAmenities = [
        'Smoke Alarm',
        'Self Check-In with Lockbox',
        'Carbon Monoxide Alarm',
        'Security Cameras',
        'Hangers',
        'Extra Pillows & Blankets',
        'Bed Linens',
        'TV with Standard Cable',
        'Refrigerator',
        'Dishwasher',
        'Microwave',
        'Coffee Maker'
    ];

    protected $rules = [
        'amenities' => 'array',
        'amenities.*' => 'string',
    ];

    public function submitAmenities()
    {
        $this->validate();

        // Sende die ausgewählten Annehmlichkeiten an die Hauptkomponente
        $this->dispatch('amenitiesUpdated', $this->amenities);

        // Rückmeldung nach dem Speichern
        session()->flash('message', 'Amenities saved successfully.');
    }


    public function render()
    {
        return view('livewire.backend.property-system.amenities-component');
    }
}

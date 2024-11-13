<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;

class PropertyInformationComponent extends Component
{
    public $title;
    public $description;
    public $fullAddress;
    public $zipCode;
    public $country;
    public $state;
    public $neighborhood;
    public $location;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'fullAddress' => 'required|string|max:255',
        'zipCode' => 'required|string|max:10',
        'country' => 'required|string|max:50',
        'state' => 'required|string|max:50',
        'neighborhood' => 'nullable|string|max:50',
        'location' => 'nullable|string|max:255',
    ];

    public function submitInformation()
    {
        $this->validate();

        // Verwende jetzt einfach $this->emit(), um das Event auszulösen
        $this->dispatch('propertyInfoUpdated', [
            'title' => $this->title,
            'description' => $this->description,
            'fullAddress' => $this->fullAddress,
            'zipCode' => $this->zipCode,
            'country' => $this->country,
            'state' => $this->state,
            'neighborhood' => $this->neighborhood,
            'location' => $this->location,
        ]);
    }

    public function render()
    {
        return view('livewire.backend.property-system.property-information-component');
    }
}

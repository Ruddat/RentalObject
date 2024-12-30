<?php

namespace App\Livewire\Backend\Vendor\Propertys;

use Livewire\Component;

class ObjDetailsComponent extends Component
{
    public $property;

    protected $rules = [
        'property.title' => 'required|string|max:255',
        'property.property_type' => 'required',
        'property.street' => 'required|string|max:255',
        'property.zip' => 'required|string|max:10',
        'property.city' => 'required|string|max:255',
    ];

    public function mount($property)
    {
        $this->property = $property;
    }

    public function save()
    {
        $this->validate();
        $this->property->save();
        session()->flash('success', 'Details wurden erfolgreich gespeichert.');
    }

    public function render()
    {
        return view('livewire.backend.vendor.propertys.obj-details-component');
    }
}

<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;
use App\Models\AttributeGroup;

class AttributeForm extends Component
{
    public $groups = [];
    public $selectedAttributes = [];

    public function mount($selectedAttributes = [])
    {
        $this->selectedAttributes = $selectedAttributes;
        $this->groups = AttributeGroup::with('attributes')->get();
    }

    public function updatedSelectedAttributes()
    {
        // Event senden, wenn die Attribute aktualisiert werden
        $this->dispatch('updateAttributes', $this->selectedAttributes);
    }

    public function render()
    {
        return view('livewire.frontend.rental-object.attribute-form');
    }
}

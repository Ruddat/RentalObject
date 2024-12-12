<?php

namespace App\Livewire\Frontend\ObjectDetails;

use Livewire\Component;

class PropertyDetails extends Component
{

    public string $property;

    public function mount(string $property)
    {
        // Setze den übergebenen Wert auf die Klasseigenschaft
        $this->property = $property;
    }

    public function render()
    {
        // Überprüfe den übergebenen Wert und lade das entsprechende Template
        return view("livewire.frontend.object-details.{$this->property}");
    }

    //public function render()
   // {
   //     return view('livewire.frontend.object-details.property-details');
   // }
}

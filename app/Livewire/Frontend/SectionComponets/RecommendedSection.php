<?php

namespace App\Livewire\Frontend\SectionComponets;

use Livewire\Component;
use App\Models\PropertyType;
use App\Models\ObjProperties;

class RecommendedSection extends Component
{

    public $propertyTypes = [];
    public $displayBlock = true;
    public $allProperties = [];

    public function mount()
    {
        // Überprüfen, ob es mindestens 6 Immobilien gibt
        $this->displayBlock = ObjProperties::count() >= 20;

        // Maximal 6 Immobilien für den "Alle"-Tab laden
        $this->allProperties = ObjProperties::where('status', 'approved')
            ->with('mainPhoto')
            ->take(6)
            ->get();

        // Kategorien laden
        $this->propertyTypes = PropertyType::with(['properties' => function ($query) {
            $query->where('status', 'approved')->with('mainPhoto');
        }])->whereHas('properties', function ($query) {
            $query->where('status', 'approved');
        })->get();
    }

    public function render()
    {
        return view('livewire.frontend.section-componets.recommended-section');
    }
}

<?php

namespace App\Livewire\Backend\Vendor\Propertys;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ObjProperties;
use Illuminate\Support\Facades\Auth;

class PropertyTable extends Component
{
    use WithPagination;

    public $selectedProperty = null;
    public $editComponent = null;


    public function selectProperty($propertyId)
    {
        $this->selectedProperty = ObjProperties::findOrFail($propertyId);
        $this->editComponent = null; // Zurücksetzen der aktuellen Bearbeitungs-Komponente
    }


    public function loadEditComponent($component)
    {
        $this->editComponent = $component;
    }


    public function render()
    {
        // Überprüfen, ob der eingeloggte Benutzer ein Admin oder Superadmin ist
        $user = Auth::user();
        $query = ObjProperties::query();

        if (!$user->hasRole('admin') && !$user->hasRole('superadmin')) {
            // Nur die Immobilien des aktuellen Benutzers abrufen
            $query->where('user_id', $user->id);
        }

        $properties = $query->paginate(10);

        return view('livewire.backend.vendor.propertys.property-table', compact('properties'));
    }
}

<?php

namespace App\Livewire\Backend\Vendor;

use Livewire\Component;
use App\Models\ObjProperties;

class ExposeConfiguration extends Component
{
    public $propertyId;
    public $selectedSections = [];
    public $selectedPhotos = [];

    public function mount($propertyId)
    {
        $this->propertyId = $propertyId;

        // Standardmäßig alle Abschnitte und Fotos anzeigen
        $this->selectedSections = ['details', 'prices', 'photos', 'energy'];
        $this->selectedPhotos = ObjProperties::find($this->propertyId)->photos->pluck('id')->toArray();
    }

    public function updateSelectedSections($section)
    {
        if (in_array($section, $this->selectedSections)) {
            $this->selectedSections = array_diff($this->selectedSections, [$section]);
        } else {
            $this->selectedSections[] = $section;
        }
    }

    public function togglePhotoSelection($photoId)
    {
        if (in_array($photoId, $this->selectedPhotos)) {
            $this->selectedPhotos = array_diff($this->selectedPhotos, [$photoId]);
        } else {
            $this->selectedPhotos[] = $photoId;
        }
    }

    public function render()
    {
        $property = ObjProperties::with('photos')->find($this->propertyId);
        return view('livewire.backend.vendor.expose-configuration', compact('property'));
    }
}

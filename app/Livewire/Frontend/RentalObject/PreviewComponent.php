<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;
use App\Models\AttributeGroup;

class PreviewComponent extends Component
{
    public $collectedData = [];
    public $attributeGroups;

    protected $listeners = ['updatePreviewData'];

    public function updatePreviewData($data)
    {
        $this->collectedData = $data;
    }



    public function loadAttributes(array $attributeIds)
    {
        return AttributeGroup::with(['attributes' => function ($query) use ($attributeIds) {
            $query->whereIn('id', $attributeIds);
        }])
        ->has('attributes') // Nur Gruppen mit zugehörigen Attributen laden
        ->get();
    }


    public function openPreviewModal()
    {
        // Daten für die Vorschau laden
        $this->refreshCollectedDataForPreview();

        // Event auslösen, um das Modal zu öffnen
        $this->dispatch('show-preview-modal');
    }



public function render()
{
    $attributeIds = $this->collectedData['stepTwo']['attributes'] ?? [];

    if (is_array($attributeIds) && !empty($attributeIds)) {
        $this->attributeGroups = $this->loadAttributes($attributeIds);
    } else {
        $this->attributeGroups = collect(); // Leere Sammlung
    }

    return view('livewire.frontend.rental-object.preview-component', [
        'attributeGroups' => $this->attributeGroups,
    ]);
}
}

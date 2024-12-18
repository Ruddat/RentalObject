<?php

namespace App\Livewire\Backend\PropertySystem;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\ObjFloor as ObjFloors;

class FloorComponent extends Component
{
    use WithFileUploads;

    public $temporaryUuid;
    public $propertyId; // Objekt-ID für das Zielverzeichnis
    public $floorName;
    public $floorPrice;
    public $pricePostfix;
    public $floorSize;
    public $sizePostfix;
    public $bedrooms;
    public $bathrooms;
    public $description;
    public $floorPlan; // Für den Datei-Upload
    public $showForm = false;

    protected $rules = [
        'floorName' => 'required|string|max:255',
        'floorPrice' => 'nullable|numeric',
        'pricePostfix' => 'nullable|string|max:20',
        'floorSize' => 'nullable|numeric',
        'sizePostfix' => 'nullable|string|max:20',
        'bedrooms' => 'nullable|integer',
        'bathrooms' => 'nullable|integer',
        'description' => 'nullable|string',
        'floorPlan' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240',
    ];

    public function mount($temporaryUuid = null, $propertyId = null)
    {
        $this->temporaryUuid = $temporaryUuid ?? Str::uuid()->toString();
        $this->propertyId = $propertyId; // Falls vorhanden
    }

    public function addFloor()
    {
        $this->validate();

        // Speicherort festlegen
        $directory = $this->propertyId
            ? "uploads/floorplans/{$this->propertyId}"
            : "uploads/floorplans/{$this->temporaryUuid}";

        // Datei speichern
        $floorPlanPath = null;
        if ($this->floorPlan) {
            $originalFilename = $this->floorPlan->getClientOriginalName();
            $floorPlanPath = $this->floorPlan->storeAs($directory, $originalFilename, 'public');
        }

        // Temporäre Floor-Daten speichern
        ObjFloors::create([
            'temporary_uuid' => $this->temporaryUuid,
            'property_id' => $this->propertyId,
            'floor_name' => $this->floorName,
            'floor_price' => $this->floorPrice,
            'price_postfix' => $this->pricePostfix,
            'floor_size' => $this->floorSize,
            'size_postfix' => $this->sizePostfix,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'description' => $this->description,
            'floor_plan_path' => $floorPlanPath,
        ]);

        // Event triggern
        $this->dispatch('floorAdded', [
            'floorName' => $this->floorName,
            'floorPrice' => $this->floorPrice,
            'pricePostfix' => $this->pricePostfix,
            'floorSize' => $this->floorSize,
            'sizePostfix' => $this->sizePostfix,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'description' => $this->description,
            'floorPlanPath' => $floorPlanPath,
        ]);

        // Felder zurücksetzen
        $this->reset(['floorName', 'floorPrice', 'pricePostfix', 'floorSize', 'sizePostfix', 'bedrooms', 'bathrooms', 'description', 'floorPlan']);
        $this->showForm = false;

        session()->flash('message', 'Floor saved successfully.');
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function render()
    {
        return view('livewire.backend.property-system.floor-component');
    }
}

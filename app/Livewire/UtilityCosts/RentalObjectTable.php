<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\RentalObject;
use Illuminate\Support\Facades\Auth;

class RentalObjectTable extends Component
{
    public $name;
    public $house_number;
    public $max_units;
    public $street;
    public $floor;
    public $zip_code;
    public $city;
    public $country = 'Deutschland';
    public $description;
    public $object_type;
    public $rentalObjects;
    public $editMode = false;
    public $editId;
    public $showForm = false; // Steuerung für das Anzeigen des Formulars
    public $square_meters;
    public $heating_type;

    protected $rules = [
        'name' => 'nullable|string|max:255',
        'street' => 'required|string|max:255',
        'house_number' => 'required|string|max:50',
        'zip_code' => 'required|string|max:10',
        'city' => 'required|string|max:255',
        'object_type' => 'required|string|in:Gewerbe,Privat,Garage',
        'country' => 'required|string|max:255',
        'description' => 'nullable|string',
        'max_units' => 'nullable|integer|min:1',
        'square_meters' => 'nullable|numeric|min:0',
        'heating_type' => 'nullable|string|in:Gas,Öl,Fernwärme,Elektro',
    ];

    public function mount()
    {
        $this->rentalObjects = RentalObject::where('user_id', Auth::id())->get();
    }

    public function addRentalObject()
    {
        $this->validate();

        RentalObject::create([
            'user_id' => Auth::id(), // User-ID hinzufügen
            'name' => $this->name,
            'street' => $this->street,
            'house_number' => $this->house_number,
            'floor' => $this->floor,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
            'country' => $this->country,
            'description' => $this->description,
            'object_type' => $this->object_type,
            'max_units' => $this->max_units,
            'square_meters' => $this->square_meters,
            'heating_type' => $this->heating_type,
        ]);

        $this->resetFields();
        $this->loadRentalObjects();
        $this->showForm = false;
    }

    public function editRentalObject($id)
    {
        $rentalObject = RentalObject::where('user_id', Auth::id())->findOrFail($id);
        $this->editMode = true;
        $this->editId = $rentalObject->id;
        $this->name = $rentalObject->name;
        $this->street = $rentalObject->street;
        $this->house_number = $rentalObject->house_number;
        $this->floor = $rentalObject->floor;
        $this->zip_code = $rentalObject->zip_code;
        $this->city = $rentalObject->city;
        $this->country = $rentalObject->country;
        $this->description = $rentalObject->description;
        $this->object_type = $rentalObject->object_type;
        $this->max_units = $rentalObject->max_units;
        $this->showForm = true;
        $this->square_meters = $rentalObject->square_meters;
        $this->heating_type = $rentalObject->heating_type;
    }

    public function updateRentalObject()
    {
        $this->validate();

        $rentalObject = RentalObject::where('user_id', Auth::id())->findOrFail($this->editId);
        $rentalObject->update([
            'name' => $this->name,
            'street' => $this->street,
            'house_number' => $this->house_number,
            'floor' => $this->floor,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
            'country' => $this->country,
            'description' => $this->description,
            'object_type' => $this->object_type,
            'max_units' => $this->max_units,
            'square_meters' => $this->square_meters,
            'heating_type' => $this->heating_type,
        ]);

        $this->resetFields();
        $this->loadRentalObjects();
        $this->showForm = false;
    }

    public function deleteRentalObject($id)
    {
        RentalObject::where('user_id', Auth::id())->findOrFail($id)->delete();
        $this->loadRentalObjects();
    }

    public function resetFields()
    {
        $this->reset(['name', 'street', 'house_number', 'floor', 'zip_code', 'city', 'country', 'description', 'object_type', 'max_units', 'editMode', 'editId', 'square_meters', 'heating_type']);
    }

    public function loadRentalObjects()
    {
        $this->rentalObjects = RentalObject::where('user_id', Auth::id())->get();
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
        $this->resetFields();
    }

    public function render()
    {
        return view('livewire.utility-costs.rental-object-table');
    }
}

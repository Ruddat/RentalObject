<?php

namespace App\Livewire\UtilityCosts;

use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;
use Illuminate\Support\Facades\Auth;

class TenantTable extends Component
{
    public $first_name;
    public $last_name;
    public $street;
    public $house_number;
    public $zip_code;
    public $city;
    public $phone;
    public $email;
    public $rental_object_id;
    public $billing_type = 'units';
    public $flat_rate;
    public $unit_count;
    public $person_count;
    public $start_date;
    public $end_date;
    public $square_meters;
    public $gas_meter;
    public $electricity_meter;
    public $water_meter;
    public $hot_water_meter;
    public $tenants;
    public $rentalObjects;
    public $editMode = false;
    public $editId;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'street' => 'nullable|string|max:255',
        'house_number' => 'nullable|string|max:20',
        'zip_code' => 'nullable|string|max:20',
        'city' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'rental_object_id' => 'required|exists:rental_objects,id',
        'billing_type' => 'required|in:units,people,flat_rate',
        'unit_count' => 'nullable|integer|min:0|required_if:billing_type,units',
        'person_count' => 'nullable|integer|min:0|required_if:billing_type,people',
        'square_meters' => 'nullable|numeric|min:0',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'gas_meter' => 'nullable|numeric|min:0',
        'electricity_meter' => 'nullable|numeric|min:0',
        'water_meter' => 'nullable|numeric|min:0',
        'hot_water_meter' => 'nullable|numeric|min:0',
    ];

    public function mount()
    {
        $this->tenants = Tenant::where('user_id', Auth::id())->get();
        $this->rentalObjects = RentalObject::where('user_id', Auth::id())->get();
    }

    public function addTenant()
    {
        $this->validate();

        Tenant::create([
            'user_id' => Auth::id(), // User-ID hinzufügen
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'rental_object_id' => $this->rental_object_id,
            'billing_type' => $this->billing_type,
            'unit_count' => $this->billing_type === 'units' ? $this->unit_count : null,
            'person_count' => $this->billing_type === 'people' ? $this->person_count : null,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'gas_meter' => $this->gas_meter,
            'electricity_meter' => $this->electricity_meter,
            'water_meter' => $this->water_meter,
            'hot_water_meter' => $this->hot_water_meter,
            'square_meters' => $this->square_meters,
            'street' => $this->street,
            'house_number' => $this->house_number,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
        ]);

        $this->resetFields();
        $this->loadTenants();
    }

    public function editTenant($id)
    {
        $tenant = Tenant::where('user_id', Auth::id())->findOrFail($id);
        $this->editMode = true;
        $this->editId = $tenant->id;
        $this->first_name = $tenant->first_name;
        $this->last_name = $tenant->last_name;
        $this->phone = $tenant->phone;
        $this->email = $tenant->email;
        $this->rental_object_id = $tenant->rental_object_id;
        $this->billing_type = $tenant->billing_type;
        $this->unit_count = $tenant->unit_count;
        $this->person_count = $tenant->person_count;
        $this->square_meters = $tenant->square_meters;
        $this->start_date = $tenant->start_date;
        $this->end_date = $tenant->end_date;
        $this->gas_meter = $tenant->gas_meter;
        $this->electricity_meter = $tenant->electricity_meter;
        $this->water_meter = $tenant->water_meter;
        $this->hot_water_meter = $tenant->hot_water_meter;
        $this->street = $tenant->street;
        $this->house_number = $tenant->house_number;
        $this->zip_code = $tenant->zip_code;
        $this->city = $tenant->city;
    }

    public function updateTenant()
    {
        $this->validate();

        $tenant = Tenant::where('user_id', Auth::id())->findOrFail($this->editId);
        $tenant->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'rental_object_id' => $this->rental_object_id,
            'billing_type' => $this->billing_type,
            'unit_count' => $this->billing_type === 'units' ? $this->unit_count : null,
            'person_count' => $this->billing_type === 'people' ? $this->person_count : null,
            'square_meters' => $this->square_meters,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'gas_meter' => $this->gas_meter,
            'electricity_meter' => $this->electricity_meter,
            'water_meter' => $this->water_meter,
            'hot_water_meter' => $this->hot_water_meter,
            'street' => $this->street,
            'house_number' => $this->house_number,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
        ]);

        $this->resetFields();
        $this->loadTenants();
    }

    public function deleteTenant($id)
    {
        Tenant::where('user_id', Auth::id())->findOrFail($id)->delete();
        $this->loadTenants();
    }

    public function resetFields()
    {
        $this->reset([
            'first_name', 'last_name', 'phone', 'email', 'rental_object_id', 'billing_type',
            'unit_count', 'person_count', 'start_date', 'end_date', 'gas_meter', 'electricity_meter',
            'water_meter', 'hot_water_meter', 'editMode', 'editId', 'square_meters'
        ]);
    }

    private function loadTenants()
    {
        $this->tenants = Tenant::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.utility-costs.tenant-table', [
            'tenants' => Tenant::with('rentalObject')->where('user_id', Auth::id())->get(),
        ]);
    }
}

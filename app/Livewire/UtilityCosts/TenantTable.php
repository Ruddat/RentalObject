<?php

namespace App\Livewire\UtilityCosts;

use App\Models\Tenant;
use Livewire\Component;
use App\Models\RentalObject;

class TenantTable extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $rental_object_id;
    public $billing_type = 'units';
    public $unit_count;
    public $person_count;
    public $start_date;
    public $end_date;
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
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'rental_object_id' => 'required|exists:rental_objects,id',
        'billing_type' => 'required|in:units,people',
        'unit_count' => 'nullable|integer|min:0',
        'person_count' => 'nullable|integer|min:0',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'gas_meter' => 'nullable|numeric|min:0',
        'electricity_meter' => 'nullable|numeric|min:0',
        'water_meter' => 'nullable|numeric|min:0',
        'hot_water_meter' => 'nullable|numeric|min:0',
    ];

    public function mount()
    {
        $this->tenants = Tenant::all();
        $this->rentalObjects = RentalObject::all();
        $this->rental_object_id = $this->rental_object_id ?? '';
    }

    public function addTenant()
    {
        $this->validate();

        Tenant::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'rental_object_id' => $this->rental_object_id,
            'billing_type' => $this->billing_type,
            'unit_count' => $this->unit_count,
            'person_count' => $this->person_count,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'gas_meter' => $this->gas_meter,
            'electricity_meter' => $this->electricity_meter,
            'water_meter' => $this->water_meter,
            'hot_water_meter' => $this->hot_water_meter,
        ]);

        $this->resetFields();
        $this->loadTenants();
    }

    public function editTenant($id)
    {
        $tenant = Tenant::findOrFail($id);
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
        $this->start_date = $tenant->start_date;
        $this->end_date = $tenant->end_date;
        $this->gas_meter = $tenant->gas_meter;
        $this->electricity_meter = $tenant->electricity_meter;
        $this->water_meter = $tenant->water_meter;
        $this->hot_water_meter = $tenant->hot_water_meter;
    }

    public function updateTenant()
    {
        $this->validate();

        $tenant = Tenant::findOrFail($this->editId);
        $tenant->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'rental_object_id' => $this->rental_object_id,
            'billing_type' => $this->billing_type,
            'unit_count' => $this->unit_count,
            'person_count' => $this->person_count,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'gas_meter' => $this->gas_meter,
            'electricity_meter' => $this->electricity_meter,
            'water_meter' => $this->water_meter,
            'hot_water_meter' => $this->hot_water_meter,
        ]);

        $this->resetFields();
        $this->loadTenants();
    }

    public function deleteTenant($id)
    {
        Tenant::findOrFail($id)->delete();
        $this->loadTenants();
    }

    public function resetFields()
    {
        $this->reset([
            'first_name',
            'last_name',
            'phone',
            'email',
            'rental_object_id',
            'billing_type',
            'unit_count',
            'person_count',
            'start_date',
            'end_date',
            'editMode',
            'editId'
        ]);
    }

    private function loadTenants()
    {
        $this->tenants = Tenant::all();
    }

    public function render()
    {
        return view('livewire.utility-costs.tenant-table');
    }
}

<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\HeatingCost;
use App\Models\RentalObject;

class HeatingCostManagement extends Component
{
    public $year;
    public $rental_object_id;
    public $heating_type = 'gas';
    public $price_per_unit;
    public $initial_reading;
    public $final_reading;
    public $total_oil_used;
    public $warm_water_percentage = 0.2;
    public $heatingCosts;
    public $editingCostId;
    public $deletingCostId;

    protected $rules = [
       // 'year' => 'required|integer|min:2000|max:'.(date('Y') + 1),
        'rental_object_id' => 'required|exists:rental_objects,id',
        'heating_type' => 'required|in:gas,oil',
        'price_per_unit' => 'required|numeric|min:0',
        'initial_reading' => 'nullable|integer|min:0|required_if:heating_type,gas',
        'final_reading' => 'nullable|integer|min:0|gte:initial_reading|required_if:heating_type,gas',
        'total_oil_used' => 'nullable|numeric|min:0|required_if:heating_type,oil',
        'warm_water_percentage' => 'nullable|numeric|between:0,1',
    ];

    public function mount()
    {
        $this->heatingCosts = HeatingCost::all();
    }

    public function saveHeatingCost()
    {
        $this->validate();

        $data = [
            'year' => $this->year,
            'rental_object_id' => $this->rental_object_id,
            'heating_type' => $this->heating_type,
            'price_per_unit' => $this->price_per_unit,
            'initial_reading' => $this->initial_reading,
            'final_reading' => $this->final_reading,
            'total_oil_used' => $this->total_oil_used,
            'warm_water_percentage' => $this->warm_water_percentage,
        ];

        if ($this->editingCostId) {
            HeatingCost::find($this->editingCostId)->update($data);
            $this->editingCostId = null;
        } else {
            HeatingCost::create($data);
        }

        $this->resetFields();
        $this->heatingCosts = HeatingCost::all();
    }

    public function editHeatingCost($id)
    {
        $heatingCost = HeatingCost::find($id);
        $this->year = $heatingCost->year;
        $this->rental_object_id = $heatingCost->rental_object_id;
        $this->heating_type = $heatingCost->heating_type;
        $this->price_per_unit = $heatingCost->price_per_unit;
        $this->initial_reading = $heatingCost->initial_reading;
        $this->final_reading = $heatingCost->final_reading;
        $this->total_oil_used = $heatingCost->total_oil_used;
        $this->warm_water_percentage = $heatingCost->warm_water_percentage;
        $this->editingCostId = $id;
    }

    public function deleteHeatingCost($id)
    {
        $this->deletingCostId = $id;
    }

    public function confirmDelete()
    {
        HeatingCost::destroy($this->deletingCostId);
        $this->deletingCostId = null;
        $this->heatingCosts = HeatingCost::all();
    }

    public function cancelDelete()
    {
        $this->deletingCostId = null;
    }

    public function resetFields()
    {
        $this->reset(['year', 'rental_object_id', 'heating_type', 'price_per_unit', 'initial_reading', 'final_reading', 'total_oil_used', 'warm_water_percentage', 'editingCostId']);
    }

    public function render()
    {
        return view('livewire.utility-costs.heating-cost-management', [
            'rentalObjects' => RentalObject::all(),
            'heatingCosts' => $this->heatingCosts,
        ]);
    }
}

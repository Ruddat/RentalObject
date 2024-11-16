<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\UtilityCost;
use App\Models\RentalObject;
use App\Models\RecordedUtilityCost;
use Illuminate\Support\Facades\Auth;

class UtilityCostRecording extends Component
{
    public $rental_object_id;
    public $utility_cost_id;
    public $amount;
    public $custom_name;
    public $distribution_key = 'units'; // Standardwert für Verteilerschlüssel
    public $utilityCosts;
    public $year;
    public $recordedCosts = [];
    public $totalCosts = 0;
    public $editMode = false;
    public $editId;

    protected $rules = [
        'rental_object_id' => 'required|exists:rental_objects,id',
        'utility_cost_id' => 'nullable|exists:utility_costs,id',
        'amount' => 'required|numeric|min:0',
        'custom_name' => 'nullable|string|max:255',
        'year' => 'required|digits:4',
        'distribution_key' => 'required|string', // Validierung für den Verteilerschlüssel
    ];

    public function mount()
    {
        $this->utilityCosts = UtilityCost::all();
        $this->year = date('Y');
        $this->distribution_key = 'units';
        $this->loadRecordedCosts();
    }

    public function updatedRentalObjectId()
    {
        $this->loadRecordedCosts();
    }

    public function updatedYear()
    {
        $this->loadRecordedCosts();
    }

    public function addRecordedCost()
    {
        $this->validate();

        RecordedUtilityCost::create([
            'user_id' => Auth::id(), // User-ID hinzufügen
            'rental_object_id' => $this->rental_object_id,
            'utility_cost_id' => $this->utility_cost_id,
            'amount' => $this->amount,
            'custom_name' => $this->custom_name,
            'year' => $this->year,
            'distribution_key' => $this->distribution_key,
        ]);

        $this->resetFields();
        $this->loadRecordedCosts();
    }

    public function editRecordedCost($id)
    {
        $cost = RecordedUtilityCost::where('user_id', Auth::id())->findOrFail($id);
        $this->editMode = true;
        $this->editId = $cost->id;
        $this->utility_cost_id = $cost->utility_cost_id;
        $this->amount = $cost->amount;
        $this->custom_name = $cost->custom_name;
        $this->distribution_key = $cost->distribution_key;
    }

    public function updateRecordedCost()
    {
        $this->validate();

        $cost = RecordedUtilityCost::where('user_id', Auth::id())->findOrFail($this->editId);

        $cost->update([
            'utility_cost_id' => $this->utility_cost_id,
            'amount' => $this->amount,
            'custom_name' => $this->custom_name,
            'distribution_key' => $this->distribution_key,
        ]);

        $this->resetFields();
        $this->loadRecordedCosts();
    }

    public function deleteRecordedCost($id)
    {
        RecordedUtilityCost::where('user_id', Auth::id())->findOrFail($id)->delete();
        $this->loadRecordedCosts();
    }

    public function resetFields()
    {
        $this->reset(['utility_cost_id', 'amount', 'custom_name', 'distribution_key', 'editMode', 'editId']);
    }

    private function loadRecordedCosts()
    {
        if ($this->rental_object_id && $this->year) {
            $this->recordedCosts = RecordedUtilityCost::with('utilityCost')
                ->where('user_id', Auth::id())
                ->where('rental_object_id', $this->rental_object_id)
                ->where('year', $this->year)
                ->get();

            $this->totalCosts = $this->recordedCosts->sum('amount');
        }
    }

    public function updatedUtilityCostId()
    {
        // Verteilerschlüssel aus `utility_costs` übernehmen, falls vorhanden
        $utilityCost = UtilityCost::find($this->utility_cost_id);
        $this->distribution_key = $utilityCost ? $utilityCost->distribution_key : 'units';
    }

    public function render()
    {
        return view('livewire.utility-costs.utility-cost-recording', [
            'rentalObjects' => RentalObject::where('user_id', Auth::id())->get(),
        ]);
    }
}

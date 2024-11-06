<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\UtilityCost;
use App\Models\RentalObject;
use App\Models\RecordedUtilityCost;

class UtilityCostRecording extends Component
{
    public $rental_object_id;
    public $utility_cost_id;
    public $amount;
    public $custom_name;
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
    ];

    public function mount()
    {
        $this->utilityCosts = UtilityCost::all();
        $this->year = date('Y'); // Standardmäßig aktuelles Jahr
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

        // Hole den Verteilerschlüssel (`distribution_key`) von `utility_costs`
        $utilityCost = UtilityCost::find($this->utility_cost_id);
        $distributionKey = $utilityCost ? $utilityCost->distribution_key : 'units';

        // Log für den Verteilerschlüssel
        \Log::info("Distribution Key for utility_cost_id {$this->utility_cost_id}: $distributionKey");

        RecordedUtilityCost::create([
            'rental_object_id' => $this->rental_object_id,
            'utility_cost_id' => $this->utility_cost_id,
            'amount' => $this->amount,
            'custom_name' => $this->custom_name,
            'year' => $this->year,
            'distribution_key' => $distributionKey, // Den ermittelten Verteilerschlüssel setzen
        ]);

        $this->resetFields();
        $this->loadRecordedCosts();
    }

    public function editRecordedCost($id)
    {
        $cost = RecordedUtilityCost::findOrFail($id);
        $this->editMode = true;
        $this->editId = $cost->id;
        $this->utility_cost_id = $cost->utility_cost_id;
        $this->amount = $cost->amount;
        $this->custom_name = $cost->custom_name;

        // Lade den Verteilerschlüssel aus dem vorhandenen Eintrag in der Tabelle `recorded_utility_costs`
        $this->distribution_key = $cost->distribution_key;
    }

    public function updateRecordedCost()
    {
        $this->validate();

        $cost = RecordedUtilityCost::findOrFail($this->editId);

        // Hole erneut den `distribution_key`, falls der `utility_cost_id` sich geändert hat
        $utilityCost = UtilityCost::find($this->utility_cost_id);
        $distributionKey = $utilityCost ? $utilityCost->distribution_key : $this->distribution_key; // Verwende vorhandenen `distribution_key`, falls `utility_cost_id` NULL ist

        $cost->update([
            'utility_cost_id' => $this->utility_cost_id,
            'amount' => $this->amount,
            'custom_name' => $this->custom_name,
            'distribution_key' => $distributionKey, // Setze den Verteilerschlüssel auch bei Update
        ]);

        $this->resetFields();
        $this->loadRecordedCosts();
    }
    public function deleteRecordedCost($id)
    {
        RecordedUtilityCost::findOrFail($id)->delete();
        $this->loadRecordedCosts();
    }

    public function resetFields()
    {
        $this->reset(['utility_cost_id', 'amount', 'custom_name', 'editMode', 'editId']);
    }

    private function loadRecordedCosts()
    {
        if ($this->rental_object_id && $this->year) {
            $this->recordedCosts = RecordedUtilityCost::with('utilityCost')
                ->where('rental_object_id', $this->rental_object_id)
                ->where('year', $this->year)
                ->get();

            // Berechnung der Gesamtkosten
            $this->totalCosts = $this->recordedCosts->sum('amount');
        }
    }

    public function render()
    {
        return view('livewire.utility-costs.utility-cost-recording', [
            'rentalObjects' => RentalObject::all(),
        ]);
    }

}

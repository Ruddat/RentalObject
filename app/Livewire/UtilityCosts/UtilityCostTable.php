<?php

namespace App\Livewire\UtilityCosts;

use Livewire\Component;
use App\Models\UtilityCost;
use Illuminate\Support\Facades\Auth;

class UtilityCostTable extends Component
{
    public $name;
    public $description;
    public $amount;
    public $distribution_key = 'units'; // Standardverteilerschlüssel
    public $utilityCosts;
    public $editMode = false;
    public $editId;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'amount' => 'required|numeric|min:0',
        'distribution_key' => 'required|in:consumption,area,people,units',
    ];

    public function mount()
    {
        $this->utilityCosts = UtilityCost::where('user_id', Auth::id())->get();
    }

    public function addUtilityCost()
    {
        $this->validate();

        UtilityCost::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'description' => $this->description,
            'amount' => $this->amount,
            'distribution_key' => $this->distribution_key,
        ]);

        $this->resetFields();
        $this->loadUtilityCosts();
    }

    public function editUtilityCost($id)
    {
        $cost = UtilityCost::where('user_id', Auth::id())->findOrFail($id);
        $this->editMode = true;
        $this->editId = $cost->id;
        $this->name = $cost->name;
        $this->description = $cost->description;
        $this->amount = $cost->amount;
        $this->distribution_key = $cost->distribution_key; // Setzen des Verteilerschlüssels
    }

    public function updateUtilityCost()
    {
        $this->validate();

        $cost = UtilityCost::where('user_id', Auth::id())->findOrFail($this->editId);
        $cost->update([
            'name' => $this->name,
            'description' => $this->description,
            'amount' => $this->amount,
            'distribution_key' => $this->distribution_key,
        ]);

        $this->resetFields();
        $this->loadUtilityCosts();
    }

    public function deleteUtilityCost($id)
    {
        UtilityCost::where('user_id', Auth::id())->findOrFail($id)->delete();
        $this->loadUtilityCosts();
    }

    public function resetFields()
    {
        $this->reset(['name', 'description', 'amount', 'distribution_key', 'editMode', 'editId']);
    }

    private function loadUtilityCosts()
    {
        $this->utilityCosts = UtilityCost::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.utility-costs.utility-cost-table');
    }
}

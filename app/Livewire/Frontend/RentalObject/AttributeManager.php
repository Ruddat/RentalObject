<?php

namespace App\Livewire\Frontend\RentalObject;

use Livewire\Component;

class AttributeManager extends Component
{
    public $groups;
    public $selectedGroup = null;
    public $attributes = [];
    public $newGroupName = '';
    public $newAttributeName = '';

    public function mount()
    {
        $this->groups = AttributeGroup::with('attributes')->get();
    }

    public function updatedSelectedGroup($groupId)
    {
        $this->attributes = Attribute::where('group_id', $groupId)->get();
    }

    public function addGroup()
    {
        $this->validate([
            'newGroupName' => 'required|string|max:255',
        ]);

        AttributeGroup::create(['name' => $this->newGroupName]);
        $this->reset('newGroupName');
        $this->mount();
        session()->flash('message', 'Gruppe erfolgreich hinzugefügt!');
    }

    public function addAttribute()
    {
        $this->validate([
            'selectedGroup' => 'required|exists:attribute_groups,id',
            'newAttributeName' => 'required|string|max:255',
        ]);

        Attribute::create([
            'name' => $this->newAttributeName,
            'group_id' => $this->selectedGroup,
        ]);

        $this->reset('newAttributeName');
        $this->updatedSelectedGroup($this->selectedGroup);
        session()->flash('message', 'Attribut erfolgreich hinzugefügt!');
    }

    public function deleteGroup($groupId)
    {
        AttributeGroup::findOrFail($groupId)->delete();
        $this->mount();
        session()->flash('message', 'Gruppe erfolgreich gelöscht!');
    }

    public function deleteAttribute($attributeId)
    {
        Attribute::findOrFail($attributeId)->delete();
        $this->updatedSelectedGroup($this->selectedGroup);
        session()->flash('message', 'Attribut erfolgreich gelöscht!');
    }

    
    public function render()
    {
        return view('livewire.frontend.rental-object.attribute-manager');
    }
}

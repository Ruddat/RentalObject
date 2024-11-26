<?php

namespace App\Livewire\Backend\Admin\ProjectManager;

use Livewire\Component;
use App\Models\ModProject;

class ProjectManagerComponent extends Component
{
    public $projects;
    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->projects = ModProject::withCount('tasks')->get();
    }

    public function createProject()
    {
        $this->validate();

        ModProject::create(['name' => $this->name]);
        $this->name = '';
        $this->projects = ModProject::all();
        $this->dispatch('projectCreated');
    }

    public function deleteProject($id)
    {
        ModProject::findOrFail($id)->delete();
        $this->projects = ModProject::all();
    }


    public function render()
    {
        return view('livewire.backend.admin.project-manager.project-manager-component');
    }
}

<?php

namespace App\Livewire\Backend\Admin\ProjectManager;

use App\Models\User;
use App\Models\ModToDo;
use Livewire\Component;
use App\Models\ModProject;

class TodoManagerComponent extends Component
{
    public $todos;
    public $projects;
    public $task;
    public $project_id;
    public $todoId;
    public $isEditMode = false;
    public $assigned_user_id;
    public $priority;
    public $status = 'in-progress';
    public $workers;
    public $notes;
    public $due_date;


    protected $rules = [
        'task' => 'required|string|max:255',
        'project_id' => 'required|exists:mod_projects,id',
        'assigned_user_id' => 'nullable|exists:users,id',
        'priority' => 'required|in:High,Medium,Low',
        'status' => 'nullable|in:Finished,In Progress',
        'notes' => 'required|string',
        'due_date' => 'nullable',
    ];

    public function mount()
    {
        $this->todos = ModToDo::with('project')->get();
        $this->projects = ModProject::all();
        $this->workers = User::role('seller')->get();

        // Fallback, falls keine Benutzer vorhanden sind
        if ($this->workers->isEmpty()) {
            $this->workers = collect([['id' => 0, 'name' => 'No workers available']]);
        }
    }

    public function addTodo()
    {
        // dd($this->task, $this->project_id, $this->assigned_user_id, $this->priority, $this->status, $this->notes, $this->due_date);
        $this->validate();

        ModToDo::create([
            'task' => $this->task,
            'project_id' => $this->project_id,
            'assigned_user_id' => $this->assigned_user_id,
            'priority' => $this->priority,
            'status' => $this->status,
            'notes' => $this->notes,
            'due_date' => $this->due_date,
        ]);

        $this->resetForm();
        $this->todos = ModToDo::with('project')->get();
        $this->dispatch('todoAdded');
    }

    public function editTodo($id)
    {
        $todo = ModToDo::findOrFail($id);
        $this->todoId = $todo->id;
        $this->task = $todo->task;
        $this->project_id = $todo->project_id;
        $this->assigned_user_id = $todo->assigned_user_id;
        $this->priority = $todo->priority;
        $this->status = $todo->status;
        $this->notes = $todo->notes;
        $this->due_date = $todo->due_date;
        $this->isEditMode = true;

        $this->dispatch('openModal');
    }

    public function updateTodo()
    {
        $this->validate();

        $todo = ModToDo::findOrFail($this->todoId);
        $todo->update([
            'task' => $this->task,
            'project_id' => $this->project_id,
            'assigned_user_id' => $this->assigned_user_id,
            'priority' => $this->priority,
            'status' => $this->status,
            'notes' => $this->notes,
            'due_date' => $this->due_date,
        ]);

        $this->resetForm();
        $this->todos = ModToDo::with('project')->get();
        $this->dispatch('closeModal');
    }


    public function deleteTodo($id)
    {
        ModToDo::findOrFail($id)->delete();
        $this->todos = ModToDo::with('project')->get();
    }

    public function resetForm()
    {
        $this->task = '';
        $this->project_id = '';
        $this->todoId = null;
        $this->isEditMode = false;
    }

    public function render()
    {
        return view('livewire.backend.admin.project-manager.todo-manager-component');
    }
}

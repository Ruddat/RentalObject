<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskManager extends Component
{
    public $tasks;
    public $newTaskTitle = '';
    public $editingTaskId;
    public $editingTaskTitle;
    public function mount()
    {
        $this->tasks = Task::all();
    }
    public function render()
    {
        return view('livewire.task-manager');
    }
    public function addTask()
    {

        //dd($this->newTaskTitle);

        $this->validate([
            'newTaskTitle' => 'required|min:3'
        ]);
        Task::create([
            'title' => $this->newTaskTitle
        ]);
        $this->newTaskTitle = '';
        $this->tasks = Task::all();
    }
    public function toggleComplete($taskId)
    {
        $task = Task::find($taskId);
        $task->is_completed = !$task->is_completed;
        $task->save();
        $this->tasks = Task::all();
    }
    public function editTask($taskId)
    {
        $this->editingTaskId = $taskId;
        $this->editingTaskTitle = Task::find($taskId)->title;
    }
    public function updateTask()
    {
        $this->validate([
            'editingTaskTitle' => 'required|min:3'
        ]);
        $task = Task::find($this->editingTaskId);
        $task->title = $this->editingTaskTitle;
        $task->save();
        $this->editingTaskId = null;
        $this->tasks = Task::all();
    }
    public function deleteTask($taskId)
    {
        Task::destroy($taskId);
        $this->tasks = Task::all();
    }
}

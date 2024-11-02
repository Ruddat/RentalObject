<div>
    <h1>My Todo List</h1>
    <form wire:submit.prevent="addTask">
        <input type="text" wire:model="newTaskTitle" placeholder="Add a new task">
        <button type="submit">Add</button>
    </form>
    <ul>
        @foreach($tasks as $task)
            <li>
                @if($editingTaskId === $task->id)
                    <input type="text" wire:model="editingTaskTitle">
                    <button wire:click="updateTask">Save</button>
                @else
                    <span style="{{ $task->is_completed ? 'text-decoration: line-through;' : '' }}">
                        {{ $task->title }}
                    </span>
                    <button wire:click="toggleComplete({{ $task->id }})">
                        {{ $task->is_completed ? 'Undo' : 'Complete' }}
                    </button>
                    <button wire:click="editTask({{ $task->id }})">Edit</button>
                    <button wire:click="deleteTask({{ $task->id }})">Delete</button>
                @endif
            </li>
        @endforeach
    </ul>
</div>

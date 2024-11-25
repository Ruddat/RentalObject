<div class="card">
    <div class="card-body">
        <div class="d-flex gap-1">
            <div class="flex-grow-1">
                <form class="me-3 app-form app-icon-form search-lg h-100" action="#">
                    <div class="position-relative h-100">
                        <input type="search" class="form-control search h-100 pe-4" placeholder="Search..."
                               aria-label="Search">
                        <i class="ti ti-search text-dark icon-search"></i>
                    </div>
                </form>
            </div>

            <!-- Modal für neues/zu bearbeitendes Todo -->
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addTodoModal">
                + Add
            </button>

            <div class="modal fade" id="addTodoModal" tabindex="-1" aria-labelledby="addTodoModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTodoModalLabel">
                                {{ $isEditMode ? 'Edit Todo' : 'Add Todo' }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Task Name:</label>
                                <input type="text" wire:model="task" class="form-control" placeholder="Enter task name">
                                @error('task') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Assign to Project:</label>
                                <select wire:model="project_id" class="form-select">
                                    <option value="">Select Project</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                                @error('project_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Assign to Employee:</label>
                                <select wire:model="assigned_user_id" class="form-select">
                                    <option value="">Select Employee</option>
                                    @foreach($workers as $worker)
                                        <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                    @endforeach
                                </select>
                                @error('assigned_user_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Priority:</label>
                                <select wire:model="priority" class="form-select">
                                    <option value="">Select Priority</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                                @error('priority') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Due Date:</label>
                                <input type="date" wire:model="due_date" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Notes:</label>
                                <textarea wire:model="notes" class="form-control" rows="3" placeholder="Enter notes"></textarea>
                                @error('notes') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status:</label>
                                <select wire:model="status" class="form-select">
                                    <option value="">Select Status</option>
                                    <option value="Finished">Finished</option>
                                    <option value="In Progress">In Progress</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            @if($isEditMode)
                                <button type="button" class="btn btn-success" wire:click="updateTodo">Update</button>
                            @else
                                <button type="button" class="btn btn-primary" wire:click="addTodo">Add</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Todo-Tabelle -->
        <div class="table-responsive app-scroll mt-3">
            <table class="table table-bottom-border table-lg align-middle todo-table">
                <thead>
                <tr>
                    <th><input type="checkbox" class="checkAll form-check-input ms-2" name="checkAll"></th>
                    <th>Task</th>
                    <th>Project</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Assign</th>
                    <th>Due Date</th>
                    <th>Notes</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                    <tr>
                        <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="{{ $todo->id }}"></th>
                        <td class="id d-none">{{ $todo->id }}</td>
                        <td class="task f-w-500 text-dark">{{ $todo->task }}</td>
                        <td class="task f-w-500 text-dark">{{ $todo->project->name }}</td>
                        <td>{{ $todo->priority }}</td>
                        <td>{{ $todo->status }}</td>
                        <td class="employee">{{ $todo->assigned_user_id ? $todo->worker->name : 'Unassigned' }}</td>
                        <td class="date text-danger">{{ $todo->due_date }}</td>
                        <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>{{ $todo->notes }}</span></td>
                        <td><button class="btn btn-sm btn-outline-success" wire:click="editTodo({{ $todo->id }})"><i class="ti ti-edit"></i></button></td>
                        <td><button class="btn btn-sm btn-outline-danger" wire:click="deleteTodo({{ $todo->id }})"><i class="ti ti-trash"></i></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const modalElement = document.getElementById('addTodoModal');
    const modal = new bootstrap.Modal(modalElement);

    window.addEventListener('openModal', () => modal.show());
    window.addEventListener('closeModal', () => modal.hide());
});
</script>

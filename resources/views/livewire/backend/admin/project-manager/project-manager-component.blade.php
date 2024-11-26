<div>
    <button type="button" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal" data-bs-target="#addProjectModal">
        <i class="ti ti-plus"></i> Add Project
    </button>

    <!-- Modal für neues Projekt -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectModalLabel">Create Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" wire:model="name" class="form-control" placeholder="Enter project name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="createProject" data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Projektliste -->
    <div class="todo-container mt-3">
        @foreach($projects as $project)
            <div class="task d-flex justify-content-between align-items-center">
                <span>{{ $project->name }} ({{ $project->tasks_count }} Tasks)</span>
                <button class="btn btn-sm p-1 border-0 delete" wire:click="deleteProject({{ $project->id }})">
                    <i class="ti ti-trash text-danger f-s-18"></i>
                </button>
            </div>
        @endforeach
    </div>
</div>

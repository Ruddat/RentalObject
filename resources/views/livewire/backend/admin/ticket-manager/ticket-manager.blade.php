<div>
    <button wire:click="create" class="btn btn-primary">Create Ticket</button>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Client</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->client }}</td>
                    <td>{{ $ticket->priority }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>
                        <button wire:click="edit({{ $ticket->id }})" class="btn btn-sm btn-warning">Edit</button>
                        <button wire:click="delete({{ $ticket->id }})" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="ticketModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ticket Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="{{ $ticketId ? 'update' : 'store' }}">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model="title" type="text" class="form-control" placeholder="Enter ticket title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client" class="form-label">Client</label>
                            <input wire:model="client" type="text" class="form-control" placeholder="Enter client name">
                            @error('client') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="priority" class="form-label">Priority</label>
                            <select wire:model="priority" class="form-select">
                                <option value="">Select priority</option>
                                <option value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>
                            @error('priority') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select wire:model="status" class="form-select">
                                <option value="">Select status</option>
                                <option value="Open">Open</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Closed">Closed</option>
                            </select>
                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input wire:model="date" type="date" class="form-control">
                            @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input wire:model="due_date" type="date" class="form-control">
                            @error('due_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="cancel">Cancel</button>
                            <button type="submit" class="btn btn-primary">{{ $ticketId ? 'Update' : 'Create' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
document.addEventListener('DOMContentLoaded', () => {
    const modalElement = document.getElementById('ticketModal');
    const modal = new bootstrap.Modal(modalElement);

    let isModalOpen = false;

    window.addEventListener('openModal', () => {
        modal.show();
        isModalOpen = true;
    });

    window.addEventListener('closeModal', () => {
        modal.hide();
        isModalOpen = false;
    });

    // Sicherstellen, dass das Modal nach DOM-Updates nicht erneut getriggert wird
    Livewire.hook('message.processed', () => {
        if (isModalOpen && !modalElement.classList.contains('show')) {
            modal.show();
        }
    });
});
    </script>

<div>
        <!-- Flash Message -->
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid">
         <div class="row m-1">
             <div class="col-12 mb-4">
                 <h4 class="main-title">@autotranslate("User Management", app()->getLocale())</h4>
             </div>
         </div>

         <div class="row advance-table-section">



            <div class="col-12">
                 <div class="card">
<!-- Button zum Erstellen eines neuen Benutzers -->
<div class="card-header">
    <h5>@autotranslate("User Table", app()->getLocale())</h5>
    <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createUserModal">@autotranslate("Add User", app()->getLocale())</button>
</div>

<div class="card-body p-0">
    <div class="table-responsive app-scroll">
        <table class="table table-bottom-border advance-drag-drop-table table-box-hover align-middle mb-0" id="sortableTable">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Role</th>
                    <th>Registered</th>
                    <th>Last Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr draggable="true" class="sortable-row" data-id="{{ $user->id }}">
                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->position }}</td>
                    <td>
                        <button type="button" class="badge text-outline-{{ $user->status == 'active' ? 'success' : ($user->status == 'pending' ? 'warning' : 'danger') }}" wire:click="toggleStatus({{ $user->id }})">
                            {{ ucfirst($user->status) }}
                        </button>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->salary }}</td>
                    <td>{{ $user->getRoleNames()->first() }}</td> <!-- Zeigt die erste Rolle des Benutzers an -->
                    <td>{{ $user->registered_at ? $user->registered_at->format('Y-m-d H:i:s') : 'N/A' }}</td>
                    <td>{{ $user->last_active_at ? $user->last_active_at->format('Y-m-d H:i:s') : 'N/A' }}</td>
                    <td>
                        <button wire:click="editUser({{ $user->id }})" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal" data-bs-target="#editUserModal">
                            <i class="ti ti-edit"></i>
                        </button>
                        @if(!in_array($user->role, ['super admin', 'admin', 'editor']))
                        <button wire:click="deleteUser({{ $user->id }})" class="btn btn-danger icon-btn b-r-4">
                            <i class="ti ti-trash"></i>
                        </button>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

             <div wire:ignore.self class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5 text-white" id="createUserModalLabel">Create User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="app-form">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <input type="text" class="form-control" wire:model="position">
                                    @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" wire:model="status">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Salary</label>
                                    <input type="text" class="form-control" wire:model="salary">
                                    @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" wire:model="role">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" wire:model="address">
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" wire:model="password">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary" wire:click="createUser">Create User</button>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title text-white" id="deleteUserModalLabel">Delete User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="mt-0 text-danger">Are you sure you want to delete this user? This action cannot be undone.</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" wire:click="confirmDeleteUser">Delete</button>
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div wire:ignore.self class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5 text-white" id="editUserModalLabel">Edit User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="app-form">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <input type="text" class="form-control" wire:model="position">
                                    @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" wire:model="status">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Salary</label>
                                    <input type="text" class="form-control" wire:model="salary">
                                    @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" wire:model="role">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" wire:model="address">
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary" wire:click="updateUser">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Sortable initialisieren
    const sortableTable = document.getElementById('sortableTable');
    if (sortableTable) {
        const sortable = new Sortable(sortableTable.querySelector('tbody'), {
            animation: 150,
            onEnd: function (evt) {
                let rows = sortableTable.querySelectorAll('tbody tr');
                let order = [];

                rows.forEach((row, index) => {
                    const id = row.getAttribute('data-id');
                    if (id && !isNaN(id)) {
                        order.push({ id: parseInt(id), position: index + 1 });
                    }
                });

                // Verwenden von Livewire.dispatch, um die Daten an die Livewire-Komponente zu senden
                Livewire.dispatch('updateUserOrder', { order: order });
            }
        });
    }

    // Browser-Event zum Schließen des Create-User-Modals
    window.addEventListener('close-create-user-modal', () => {
        const createUserModalElement = document.getElementById('createUserModal');
        if (createUserModalElement) {
            const createUserModal = bootstrap.Modal.getOrCreateInstance(createUserModalElement);
            createUserModal.hide();
        }
    });

    // Browser-Event zum Öffnen des Delete-User-Modals
    window.addEventListener('show-delete-user-modal', () => {
        const deleteUserModalElement = document.getElementById('deleteUserModal');
        if (deleteUserModalElement) {
            const deleteUserModal = bootstrap.Modal.getOrCreateInstance(deleteUserModalElement);
            deleteUserModal.show();
        }
    });

    // Browser-Event zum Schließen des Delete-User-Modals
    window.addEventListener('close-delete-user-modal', () => {
        const deleteUserModalElement = document.getElementById('deleteUserModal');
        if (deleteUserModalElement) {
            const deleteUserModal = bootstrap.Modal.getOrCreateInstance(deleteUserModalElement);
            deleteUserModal.hide();
        }
    });

    // Browser-Event zum Öffnen des Edit-User-Modals
    window.addEventListener('show-edit-user-modal', () => {
        const editUserModalElement = document.getElementById('editUserModal');
        if (editUserModalElement) {
            const editUserModal = bootstrap.Modal.getOrCreateInstance(editUserModalElement);
            editUserModal.show();
        }
    });
});

    // Browser-Event zum Schließen des Edit-User-Modals
    window.addEventListener('close-edit-user-modal', () => {
        const deleteUserModalElement = document.getElementById('editUserModal');
        if (deleteUserModalElement) {
            const deleteUserModal = bootstrap.Modal.getOrCreateInstance(deleteUserModalElement);
            deleteUserModal.hide();
        }
    });
</script>
</div>

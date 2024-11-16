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
                <h4 class="main-title">@autotranslate("Role and Permission Management", app()->getLocale())</h4>
            </div>
        </div>

        <div class="row advance-table-section">
            <div class="col-6">
                <div class="card">
                    <!-- Button to Create a New Role -->
                    <div class="card-header">
                        <h5>@autotranslate("Role Table", app()->getLocale())</h5>
                        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createRoleModal">@autotranslate("Add Role", app()->getLocale())</button>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive app-scroll">
                            <table class="table table-bottom-border advance-drag-drop-table table-box-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Role Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <button wire:click="editRole({{ $role->id }})" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal" data-bs-target="#editRoleModal">
                                                <i class="ti ti-edit"></i>
                                            </button>
                                            @if(!in_array($role->name, ['super admin', 'admin', 'seller', 'vendor', 'customer', 'manager', 'newuser']))
                                            <button wire:click="deleteRole({{ $role->id }})" class="btn btn-danger icon-btn b-r-4">
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

            <div class="col-6">
                <div class="card">
                    <!-- Button to Create a New Permission -->
                    <div class="card-header">
                        <h5>@autotranslate("Permission Table", app()->getLocale())</h5>
                        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createPermissionModal">@autotranslate("Add Permission", app()->getLocale())</button>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive app-scroll">
                            <table class="table table-bottom-border advance-drag-drop-table table-box-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Permission Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <button wire:click="deletePermission({{ $permission->id }})" class="btn btn-danger icon-btn b-r-4">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Role Modal -->
        <div wire:ignore.self class="modal fade" id="createRoleModal" tabindex="-1" aria-labelledby="createRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5 text-white" id="createRoleModalLabel">Create Role</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="app-form">
                            <div class="mb-3">
                                <label class="form-label">Role Name</label>
                                <input type="text" class="form-control" wire:model="name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-light-primary" wire:click="createRole">Create Role</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Permission Modal -->
        <div wire:ignore.self class="modal fade" id="createPermissionModal" tabindex="-1" aria-labelledby="createPermissionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5 text-white" id="createPermissionModalLabel">Create Permission</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="app-form">
                            <div class="mb-3">
                                <label class="form-label">Permission Name</label>
                                <input type="text" class="form-control" wire:model="permissionName">
                                @error('permissionName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-light-primary" wire:click="createPermission">Create Permission</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Role Modal -->
        <div wire:ignore.self class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5 text-white" id="editRoleModalLabel">Edit Role</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="app-form">
                            <div class="mb-3">
                                <label class="form-label">Role Name</label>
                                <input type="text" class="form-control" wire:model="name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Assign Permissions</label>
                                <select multiple class="form-select" wire:model="rolePermissions">
                                    @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                                @error('rolePermissions') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-light-primary" wire:click="updateRole">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal Close Events
        window.addEventListener('close-create-role-modal', () => {
            const createRoleModalElement = document.getElementById('createRoleModal');
            if (createRoleModalElement) {
                const createRoleModal = bootstrap.Modal.getOrCreateInstance(createRoleModalElement);
                createRoleModal.hide();
            }
        });

        window.addEventListener('close-edit-role-modal', () => {
            const editRoleModalElement = document.getElementById('editRoleModal');
            if (editRoleModalElement) {
                const editRoleModal = bootstrap.Modal.getOrCreateInstance(editRoleModalElement);
                editRoleModal.hide();
            }
        });
    </script>
</div>

<?php

namespace App\Livewire\Backend\Admin\RolesAndPermissions;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionsTable extends Component
{
    use WithPagination;

    public $name;
    public $roleId;
    public $permissionId;
    public $selectedRole;
    public $rolePermissions = [];
    public $permissionName;

    protected $listeners = [
        'refreshComponent' => '$refresh'
    ];

    protected $rules = [
        'name' => 'required|string|max:255|unique:roles,name',
        'permissionName' => 'required|string|max:255|unique:permissions,name', // Regel für Berechtigungsname
    ];

    public function render()
    {

        $users = User::all();
        $roles = Role::paginate(10);
        $permissions = Permission::all();

  //      return view('livewire.backend.admin.roles-and-permissions.roles-permissions-table', [
         //   'roles' => Role::paginate(10),
        //    'permissions' => Permission::all(), // Hier werden alle Berechtigungen geladen
//    ]);

return view('livewire.backend.admin.roles-and-permissions.roles-permissions-table', compact('users', 'roles', 'permissions'));


    }

    public function createRole()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:roles,name',
        ]);

        Role::create(['name' => $this->name]);
        session()->flash('message', 'Role created successfully.');
        $this->resetInputFields();
    }

    public function editRole($roleId)
    {
        $role = Role::findOrFail($roleId);
        $this->selectedRole = $role;
        $this->name = $role->name;
        $this->rolePermissions = $role->permissions->pluck('id')->toArray();

        // Event zum Öffnen des Edit-Role-Modals
        $this->dispatch('show-edit-role-modal');
    }

    public function updateRole()
    {
        // Validierung des neuen Rollennamens
        $this->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $this->selectedRole->id,
        ]);

        if ($this->selectedRole) {
            $role = Role::findOrFail($this->selectedRole->id);

            // Aktualisiere den Namen der Rolle
            $role->update(['name' => $this->name]);

            // Berechtigungen der Rolle synchronisieren
            $permissions = Permission::whereIn('id', $this->rolePermissions)->pluck('name');
            $role->syncPermissions($permissions);

            session()->flash('message', 'Role updated successfully.');

            // Felder zurücksetzen und Modal schließen
            $this->resetInputFields();
            $this->dispatch('close-edit-role-modal');
        }
    }

    public function deleteRole($roleId)
    {
        $role = Role::findOrFail($roleId);

        $protectedRoles = ['admin', 'super admin', 'seller', 'vendor', 'newuser'];
        if (in_array($role->name, $protectedRoles)) {
            session()->flash('error', 'This role cannot be deleted.');
            return;
        }

        $role->delete();
        session()->flash('message', 'Role deleted successfully.');
        $this->dispatch('refreshComponent');
    }

    public function createPermission()
    {
        $this->validate([
            'permissionName' => 'required|string|max:255|unique:permissions,name',
        ]);

        Permission::create(['name' => $this->permissionName]);
        session()->flash('message', 'Permission created successfully.');
        $this->resetInputFields();
    }

    public function assignPermissionsToRole($roleId)
    {
        $role = Role::findOrFail($roleId);

        // IDs der Berechtigungen in die entsprechenden Namen umwandeln
        $permissions = Permission::whereIn('id', $this->rolePermissions)->pluck('name');

        $role->syncPermissions($permissions);
        session()->flash('message', 'Permissions assigned to role successfully.');
        $this->resetInputFields();
    }

    public function deletePermission($permissionId)
    {
        $permission = Permission::findOrFail($permissionId);
        $permission->delete();
        session()->flash('message', 'Permission deleted successfully.');
        $this->dispatch('refreshComponent');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->permissionName = '';
        $this->permissions = [];
        $this->selectedRole = null;
        $this->rolePermissions = [];
    }
}

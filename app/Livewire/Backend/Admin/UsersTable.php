<?php

namespace App\Livewire\Backend\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Component
{


    use WithPagination;

    public $deleteUserId;
    public $selectedUser;
    public $name;
    public $email;
    public $position;
    public $status;
    public $salary;
    public $password;
    public $role;
    public $order;
    public $phone;
    public $address;

    protected $listeners = ['updateUserOrder' => 'updateUserOrder'];

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'position' => 'required|string|max:255',
        'status' => 'required|string',
        'salary' => 'required|numeric',
        'password' => 'nullable|string|min:8', // password is nullable for edit
        'role' => 'required|exists:roles,id', // validating role ID instead of name
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
    ];

    public function render()
    {
        return view('livewire.backend.admin.users-table', [
            'users' => User::orderBy('order', 'asc')->paginate(10),
            'roles' => Role::all(),
        ]);
    }

    public function editUser($userId)
    {
        $user = User::findOrFail($userId);
        $this->selectedUser = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->position = $user->position;
        $this->status = $user->status;
        $this->salary = $user->salary;
        $this->role = $user->roles->first() ? $user->roles->first()->id : null; // Use role ID here
        $this->phone = $user->phone;
        $this->address = $user->address;

        // Event zum Öffnen des Edit-User-Modals
        $this->dispatch('show-edit-user-modal');
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->selectedUser->id, // E-Mail des aktuellen Benutzers ausschließen
            'position' => 'required|string|max:255',
            'status' => 'required|string',
            'salary' => 'required|numeric',
            'password' => 'nullable|string|min:8', // Passwort ist optional beim Bearbeiten
            'role' => 'required|exists:roles,id', // Rolle wird per ID validiert
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        if ($this->selectedUser) {
            $user = User::findOrFail($this->selectedUser->id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'position' => $this->position,
                'status' => $this->status,
                'salary' => $this->salary,
                'phone' => $this->phone,
                'address' => $this->address,
            ]);

            if ($this->password) {
                $user->password = Hash::make($this->password);
                $user->save();
            }

            if ($this->role) {
                $roleName = Role::find($this->role)->name; // Rolle anhand der ID abrufen
                $user->syncRoles([$roleName]); // Rolle synchronisieren
            }

            session()->flash('message', 'User updated successfully.');
            $this->resetInputFields();
        }
                // Sende ein Browser-Event zum Schließen des Modals
                $this->dispatch('close-edit-user-modal');
    }


    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);

        // Rollen, die nicht gelöscht werden dürfen
        $protectedRoles = ['admin', 'super admin', 'seller', 'vendor'];

        if (!in_array(strtolower($user->roles->first()->name ?? ''), $protectedRoles)) {
            $this->deleteUserId = $userId;
            $this->dispatch('show-delete-user-modal');
        } else {
            session()->flash('message', 'This user cannot be deleted due to protected role.');
        }
    }

    public function confirmDeleteUser()
    {
        User::findOrFail($this->deleteUserId)->delete();
        session()->flash('message', 'User deleted successfully.');
        $this->dispatch('close-delete-user-modal');
    }

    public function createUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'position' => 'required|string|max:255',
            'status' => 'required|string',
            'salary' => 'required|numeric',
            'password' => 'required|string|min:8',
            'role' => 'required|exists:roles,id', // Rolle wird per ID validiert
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);


        // Überprüfe, ob der authentifizierte Benutzer die Berechtigung "create users" hat
        if (!Auth::user()->hasPermissionTo('manage users')) {
            session()->flash('error', 'You do not have permission to create a user.');
            return;
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'position' => $this->position,
            'status' => $this->status,
            'salary' => $this->salary,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        if ($this->role) {
            $roleName = Role::find($this->role)->name; // Rolle anhand der ID abrufen
            $user->assignRole($roleName); // Rolle zuweisen
        }

        session()->flash('message', 'User created successfully.');
        $this->resetInputFields();

        // Sende ein Browser-Event zum Schließen des Modals
        $this->dispatch('close-create-user-modal');
    }


    public function updateUserOrder($order)
    {
        // Überprüfen, ob die Daten ein Array sind
        if (!is_array($order)) {
            \Log::error('Invalid data format received for order update', ['order' => $order]);
            return;
        }

        // Debugging: Ausgabe der empfangenen Daten
        \Log::info('Received order data:', $order);

        foreach ($order as $item) {
            if (isset($item['id']) && isset($item['position'])) {
                $id = $item['id'];
                $position = $item['position'];

                // Update the user's order field
                $user = User::find($id);
                if ($user) {
                    $user->order = $position;
                    $user->save();
                } else {
                    \Log::error('User not found for updating order', ['id' => $id]);
                }
            } else {
                \Log::error('Invalid order item structure', ['item' => $item]);
            }
        }

        session()->flash('message', 'User order updated successfully.');
    }

    public function toggleStatus($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->status = $user->status === 'active' ? 'pending' : 'active';
            $user->save();
        }
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->position = '';
        $this->status = '';
        $this->salary = '';
        $this->password = '';
        $this->role = '';
        $this->phone = '';
        $this->address = '';
        $this->selectedUser = null;
    }
}

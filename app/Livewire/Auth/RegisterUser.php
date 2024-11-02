<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisterUser extends Component
{
    public $username;
    public $email;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)],
        ];
    }

    public function register()
    {
        // Versuch der Validierung
        try {
            $this->validate();
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Bei Validierungsfehlern Modal öffnen und Fehler anzeigen
            $this->dispatch('open-modal');
            throw $e;
        }

        // Benutzer erstellen
        $user = User::create([
            'name' => $this->username,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Benutzer anmelden
        Auth::login($user);

        // Modal schließen und Nachricht anzeigen
        $this->dispatch('close-modal');
        session()->flash('message', 'Registration successful!');
    }

    public function render()
    {
        return view('livewire.auth.register-user');
    }
}

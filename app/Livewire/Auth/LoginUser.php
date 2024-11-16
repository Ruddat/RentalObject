<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Fehler: Fehlermeldung anzeigen, Login bleibt sichtbar
            $this->dispatch('open-modal-login');
            $this->addError('email', 'Diese Zugangsdaten stimmen nicht mit unseren Aufzeichnungen überein. Bitte versuchen Sie es erneut oder registrieren Sie sich.');
            return;
        }

        // Erfolg: Weiterleitung
        session()->flash('message', 'Erfolgreich eingeloggt.');
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.auth.login-user');
    }
}

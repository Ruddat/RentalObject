<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUser extends Component
{
    public $email;
    public $password;
    public $remember = true;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ];

    public function login()
    {
        try {
            $this->validate();
        } catch (ValidationException $e) {
            $this->dispatch('open-modal-login');
            throw $e;  // Zeige den Fehler an, ohne das Modal zu schließen
        }

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', 'Diese Zugangsdaten stimmen nicht mit unseren Aufzeichnungen überein. Bitte versuchen Sie es erneut oder registrieren Sie sich.');
            $this->dispatch('open-modal-login');
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

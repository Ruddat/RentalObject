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

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Erfolg: Weiterleitung oder Schließen des Modals
            session()->flash('message', 'Successfully logged in.');
            return redirect()->route('dashboard');
        }

        // Fehler: Fehlermeldung anzeigen
        $this->addError('email', 'These credentials do not match our records.');
    }


    public function render()
    {
        return view('livewire.auth.login-user');
    }
}

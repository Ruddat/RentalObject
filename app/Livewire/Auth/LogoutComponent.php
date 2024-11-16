<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class LogoutComponent extends Component
{
    public function logout()
    {
        Auth::logout(); // Benutzer abmelden

        session()->invalidate(); // Session ungültig machen
        session()->regenerateToken(); // Token regenerieren

        return redirect()->route('home'); // Weiterleitung zur Anmeldeseite
    }

    public function render()
    {
        return view('livewire.auth.logout-component');
    }
}

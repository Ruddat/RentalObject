<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    public $user;

    public function mount()
    {
        // Aktuell authentifizierten Benutzer abrufen
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.auth.user-profile');
    }
}

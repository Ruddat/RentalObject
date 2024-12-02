<?php

namespace App\Livewire\Backend\Admin\ChatManager;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class VideoChat extends Component
{
    public $roomName = 'LaravelLivewireRoom';

    public function mount()
    {
        // Logge beim Initialisieren der Komponente
        Log::info('VideoChat-Komponente initialisiert.', ['roomName' => $this->roomName]);
    }

    public function render()
    {
        // Logge beim Rendern
        Log::info('VideoChat-Komponente wird gerendert.', ['roomName' => $this->roomName]);
        return view('livewire.backend.admin.chat-manager.video-chat', [
            'roomName' => $this->roomName,
        ]);
    }

    public function updatedRoomName($value)
    {
        // Logge, wenn der Raumname aktualisiert wird
        Log::info('Raumname aktualisiert.', ['newRoomName' => $value]);
    }
}

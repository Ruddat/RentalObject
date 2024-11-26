<?php

namespace App\Livewire\Backend\Admin\ChatManager;

use Livewire\Component;
use App\Models\ModChatMessage;

class ChatComponent extends Component
{
    public $messages;
    public $messageText;

    protected $rules = [
        'messageText' => 'required|max:255',
    ];

    public function mount()
    {
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->messages = ModChatMessage::latest()->take(50)->get()->reverse()->values()->toArray();
    }

    public function sendMessage()
    {
        $this->validate();

        ModChatMessage::create([
            'user_id' => auth()->id(),
            'content' => $this->messageText,
        ]);

        $this->messageText = '';
        $this->loadMessages();

        $this->dispatch('messageSent');
    }
    public function render()
    {
        return view('livewire.backend.admin.chat-manager.chat-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function loadNewMessages()
    {
        $this->messages = ModChatMessage::latest()->take(50)->get()->reverse()->values()->toArray();
    }

}

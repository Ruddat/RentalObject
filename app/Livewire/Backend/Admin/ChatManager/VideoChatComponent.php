<?php

namespace App\Livewire\Backend\Admin\ChatManager;

use App\Models\User;
use Livewire\Component;
use App\Helpers\MailHelper;
use App\Models\ModVideoRoom;
use App\Models\ModChatMessage;

class VideoChatComponent extends Component
{
    public $roomId;
    public $message = '';
    public $messages;
    public $messageText;
    public $email;
    public $roomMembers;

    // Validierungsregeln
    protected $rules = [
        'messageText' => 'required|string|max:255',
    ];


    public function mount($roomId)
    {

        $this->roomId = $roomId;
        $this->loadMessages();
        $this->loadRoomMembers();
    }

    public function loadRoomMembers()
    {
        $room = ModVideoRoom::with('users')->find($this->roomId);
        $this->roomMembers = $room ? $room->users : [];
    }

    public function loadMessages()
    {
        $this->messages = ModChatMessage::where('room_id', $this->roomId)
            ->with('user') // Lade die Beziehung
            ->latest()
            ->take(50)
            ->get()
            ->reverse()
            ->values()
            ->toArray(); // Umwandlung in ein Array
    }

    public function sendMessage()
    {

        // Validierung
        $this->validate();

        // Nachricht erstellen
        $newMessage = ModChatMessage::create([
            'user_id' => auth()->id(),
            'room_id' => $this->roomId,
            'content' => $this->messageText,
        ]);

        // Nachricht zurücksetzen
        $this->message = '';

        // Neue Nachricht zur bestehenden Liste hinzufügen
        $this->messages[] = $newMessage->load('user')->toArray();

        // Livewire-Event senden
        $this->dispatch('messageSent');
    }

    public function addUserToRoom($userId)
    {
        $room = ModVideoRoom::findOrFail($this->roomId);

        if (!$room->users()->where('user_id', $userId)->exists()) {
            $room->users()->attach($userId);

            $this->dispatch('userAdded', $userId);
        } else {

            $this->dispatch('userAlreadyInRoom', $userId);
        }
    }


    public function inviteUser()
    {
        // Validiere die Eingabe
        $this->validate([
            'email' => 'required|email',
        ]);

        // Finde den Benutzer
        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->dispatch('userNotFound', $this->email);
            return;
        }

        // Benutzer zum Raum hinzufügen
        $this->addUserToRoom($user->id);

        // E-Mail-Betreff und -Inhalt definieren
        $subject = "Einladung zum Videochat-Raum";
        $body = "<p>Hallo {$user->name},</p>
                 <p>Sie wurden eingeladen, an einem Videochat teilzunehmen.</p>
                 <p>Klicken Sie auf den folgenden Link, um beizutreten:</p>
                 <p><a href='" . route('video.room', ['roomName' => $this->roomId]) . "'>Raum betreten</a></p>
                 <p>Viele Grüße,<br>Das Team</p>";

        // E-Mail mit dem MailHelper senden
        if (MailHelper::sendEmail($user->email, $subject, $body, $user->name)) {
            $this->dispatch('invitationSent', $this->email);
        } else {
            $this->dispatch('mailFailed', $this->email);
        }
    }

    public function handleIceCandidate($candidate)
    {
        // Broadcast den ICE-Kandidaten
        broadcast(new IceCandidateEvent($this->roomId, $candidate));
        // Dispatch für Livewire
        $this->dispatch('candidateReceived', $candidate);
    }

    public function handleOffer($offer)
    {
        // Broadcast das Offer
        broadcast(new OfferEvent($this->roomId, $offer));
        // Dispatch für Livewire
        $this->dispatch('offerReceived', $offer);
    }

    public function handleAnswer($answer)
    {
        // Broadcast die Answer
        broadcast(new AnswerEvent($this->roomId, $answer));
        // Dispatch für Livewire
        $this->dispatch('answerReceived', $answer);
    }


    public function render()
    {
        return view('livewire.backend.admin.chat-manager.video-chat-component');
    }
}

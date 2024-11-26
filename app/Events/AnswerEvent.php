<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AnswerEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomId;
    public $answer;

    public function __construct($roomId, $answer)
    {
        $this->roomId = $roomId;
        $this->answer = $answer;
    }

    public function broadcastOn()
    {
        return new PresenceChannel('room.' . $this->roomId);
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IceCandidateEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomId;
    public $candidate;

    public function __construct($roomId, $candidate)
    {
        $this->roomId = $roomId;
        $this->candidate = $candidate;
    }

    public function broadcastOn()
    {
        return new PresenceChannel('room.' . $this->roomId);
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OfferEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomId;
    public $offer;

    public function __construct($roomId, $offer)
    {
        $this->roomId = $roomId;
        $this->offer = $offer;
    }

    public function broadcastOn()
    {
        return new PresenceChannel('room.' . $this->roomId);
    }
}

<?php

namespace App\Events;

use App\Models\Twoot;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Twooted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Twoot $twoot;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Twoot $twoot)
    {
        $this->twoot = $twoot;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\{Channel, InteractsWithSockets, PresenceChannel, PrivateChannel};
use Illuminate\Contracts\Broadcasting\{ShouldBroadcast, ShouldBroadcastNow};
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message1;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message1)
    {
        $this->message1 = $message1;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('messanger');
    }
}

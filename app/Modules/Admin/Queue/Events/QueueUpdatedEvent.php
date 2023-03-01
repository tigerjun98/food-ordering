<?php

namespace App\Modules\Admin\Queue\Events;

use App\Models\Queue;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QueueUpdatedEvent implements ShouldBroadcast {
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $afterCommit = true;
    public string $message;
    public Queue $queue;
    public string $type;

    public function __construct(String $type, String $message, Queue $queue) {
        $this->type = $type;
        $this->message = $message;
        $this->queue = $queue;
    }

    public function broadcastAs() {
        return 'QueueUpdatedEvent';
    }

    public function broadcastOn() { // use PrivateChannel to create channels only for auth users
        return new Channel('channel-name'); // enter channel name
    }
}

<?php

namespace App\Modules\Admin\Queue\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Queue\Events\QueueUpdatedEvent;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class QueueEventService
{
    // private QueueService $service;

    public function __construct()
    {
        // $this->service = new QueueService();
    }

    public function serve(Queue $queue)
    {
        QueueUpdatedEvent::dispatch(Queue::SERVED, '', $queue );
    }

    public function newQueue(Queue $queue, $waitingPatient)
    {
        QueueUpdatedEvent::dispatch(Queue::NEW_QUEUE, $waitingPatient.' patient are waiting!', $queue);
    }

    public function consulted(Queue $queue)
    {
        QueueUpdatedEvent::dispatch(Queue::CONSULTED, 'Next patient pls!', $queue);
    }


}

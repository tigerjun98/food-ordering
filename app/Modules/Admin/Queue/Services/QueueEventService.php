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

    public function serve(Queue $queue, $waitingPatient)
    {
        QueueUpdatedEvent::dispatch(Queue::SERVED, $waitingPatient.' patient are waiting!', $queue );
    }

    public function newQueue(Queue $queue, $msg = '')
    {
        QueueUpdatedEvent::dispatch(Queue::NEW_QUEUE, $msg, $queue);
    }

    public function consulted(Queue $queue, $msg = '')
    {
        QueueUpdatedEvent::dispatch(Queue::CONSULTED, $msg, $queue);
    }

    public function checkout(Queue $queue, $msg = '')
    {
        // Pharmacy to cashier
        QueueUpdatedEvent::dispatch(Queue::CHECKOUT, $msg, $queue);
    }

    public function completed(Queue $queue, $msg = '')
    {
        QueueUpdatedEvent::dispatch(Queue::COMPLETED, $msg, $queue);
    }

    public function deleted(Queue $queue, $msg = '')
    {
        QueueUpdatedEvent::dispatch(Queue::DELETED, $msg, $queue);
    }
}

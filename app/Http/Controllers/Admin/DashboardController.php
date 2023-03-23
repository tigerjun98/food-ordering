<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Queue\Services\QueueService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    use ApiResponser;

    public function getQueueCount()
    {
        $queueService = (new QueueService());
        $data['reception'] = $queueService->countWaitingPatient();
        $data['doctor'] = $queueService->countServingPatient( Auth::id() );
        $data['pharmacy'] = $queueService->countWaitingPatient(Queue::MEDICINE);
        return makeResponse(200, null, $data);
    }
}


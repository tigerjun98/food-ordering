<?php

namespace App\Observers;

use App\Models\Consultation;
use App\Models\Queue;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class QueueObserver
{

    public function getRunningNo(): array
    {
        $max = 999;
        $totalQueueToday = Queue::Today()->latest()->count();
        $arr['sorting'] = str_pad($totalQueueToday + 1, 3, 0, STR_PAD_LEFT);
        $arr['priority'] = $max - $totalQueueToday;
        return $arr;
    }

    public function creating(Queue $model)
    {
        $sortingNo = self::getRunningNo();
        $model->id = $model->id ?? abs( crc32( uniqid() ) );
        $model->sorting = $sortingNo['sorting'];
        $model->priority = $model->priority ?? $sortingNo['priority'];
    }

}

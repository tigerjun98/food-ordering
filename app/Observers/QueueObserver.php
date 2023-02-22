<?php

namespace App\Observers;

use App\Models\Consultation;
use App\Models\Queue;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class QueueObserver
{
    public function getRunningNo(): string
    {
        $lastRunningNo = Queue::Today()->latest()->count();
        return str_pad($lastRunningNo + 1, 3, 0, STR_PAD_LEFT);
    }

    public function creating(Queue $model)
    {
        $model->id = $model->id ?? abs( crc32( uniqid() ) );
        $model->sorting = self::getRunningNo();
    }

}

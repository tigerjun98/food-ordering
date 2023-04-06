<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Queue\Services\QueueCountService;
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
        $service = (new QueueCountService());
        $data['reception']  = $service->getTodayReceptionistCount();
        $data['doctor']     = $service->getTodayDoctorCount( Auth::user() );
        $data['pharmacy']   = $service->getTodayPharmacyCount();
        $data['cashier']    = $service->getTodayCashierCount();
        return makeResponse(200, null, $data);
    }
}


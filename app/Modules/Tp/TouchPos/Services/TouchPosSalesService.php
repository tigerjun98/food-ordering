<?php

namespace App\Modules\Tp\TouchPos\Services;

use App\Entity\Enums\ConsultationEnum;
use App\Entity\Enums\StateEnum;
use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Fee;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class TouchPosSalesService
{
    private TouchPosService $service;

    public function __construct()
    {
        $this->service = new TouchPosService(101);
    }

    public function findSales($docNo)
    {
        $res = $this->service->get('TouchSeries/Order/'.$docNo);
        dd($res);
    }

}

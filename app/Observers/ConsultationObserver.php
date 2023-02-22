<?php

namespace App\Observers;

use App\Models\Consultation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ConsultationObserver
{
    public function getRunningNo($clinicCode = null): string //  PCNyymmdd{ClinicInitial}XXX = PCN230220YLN001
    {
        $clinicCode = $clinicCode ?? Auth::user()->clinic->code;
        $lastRunningNo = Consultation::Today()->latest()->count();
        $nextRunningNo = str_pad($lastRunningNo + 1, 3, 0, STR_PAD_LEFT);

        return 'PCN'.Carbon::now()->format('ymd').$clinicCode.$nextRunningNo;
    }

    public function creating(Consultation $consultation)
    {
        $consultation->admin_id = $consultation->admin_id ?? Auth::id();
        $clinicCode = $consultation->doctor->clinic->code;
        $consultation->id = $consultation->id ?? abs( crc32( uniqid() ) );
        $consultation->ref_id = self::getRunningNo($clinicCode);
    }

}

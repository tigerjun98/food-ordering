<?php

namespace App\Observers;

use App\Models\Consultation;
use App\Models\User;
use Carbon\Carbon;

class ConsultationObserver
{
    public function creating(Consultation $consultation)
    {
//        if(!$consultation->id){
//
//        }
        $consultation->id = abs( crc32( uniqid() ) );
        $consultation->ref_id = 'CO'.Carbon::now()->format('ymdH');
//        $consultation->save();
    }
}

<?php

namespace App\Modules\Admin\Consultation\Services;

use App\Models\Consultation;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Attachment\Services\AttachmentService;
use App\Modules\Admin\Option\Services\OptionService;
use App\Modules\Admin\Queue\Services\QueueService;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class ConsultationPrintService
{
    private Consultation $model;

    public function __construct()
    {
        $this->model = new Consultation();
    }

    public function typeToString(): string
    {
        $str = '';
        $items = request()->item;
        foreach ( $items as $layout => $item ){
            foreach( $item as $key2 => $value){
                $str .= $layout.'-'.$key2.',';
            }
        }
        return $str;
    }

    public function print($consultId)
    {
        $res['id'] = $consultId;
        $res['types'] = $this->typeToString();
        $res['title'] = request()->title;

        return $res;
    }

}

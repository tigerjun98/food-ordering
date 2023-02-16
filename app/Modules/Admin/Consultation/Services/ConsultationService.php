<?php

namespace App\Modules\Admin\Consultation\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\User;
use App\Modules\Admin\Option\Services\OptionService;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class ConsultationService
{
    private Consultation $model;

    public function __construct()
    {
        $this->model = new Consultation();
    }

    public function store(array $request): Consultation
    {
        $request = $this->optionExistsOrCreate($request);
        $consultation = array_only($request, [
            'user_id', 'advise', 'symptom', 'internal_remark', 'specialists', 'syndromes', 'diagnoses'
        ]);

        $model = $this->model->updateOrCreate(['id' => $request['id'] ], $consultation);
        (new ConsultationPrescriptionService($model))->store($request);
        return $model;
    }

    public function optionExistsOrCreate(array $request): array
    {
        $columns = ['specialists', 'syndromes', 'diagnoses'];
        foreach ($columns as $type){
            if(isset($request[$type])){
                $options = (new OptionService())->createIfNotExists($request[$type], $type);
                $request[$type] = implode(',', $options);
            }
        }
        return $request;
    }

//    public function create(array $request): Consultation
//    {
//        $consultation = array_only($request, [
//            'user_id', 'advise', 'symptom', 'internal_remark', 'specialists', 'syndromes', 'diagnoses'
//        ]);
//
//        $consultation = Consultation::create($consultation);
//        (new ConsultationPrescriptionService($consultation))->store($request);
//
//        return $consultation;
//    }

    public function delete(Consultation $model)
    {
        $model->delete();
        (new ConsultationPrescriptionService($model))->delete();
    }
}

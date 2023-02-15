<?php

namespace App\Modules\Admin\Consultation\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
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

    public function store(array $request): Medicine
    {
        $request = $this->handleMultiSelectOpt($request);

        $model = isset($request['id'])
            ? $this->model->find($request['id'])
            : null; // generate unique id

        $model = $model
            ? $model->update($request)
            : self::create($request);

        return $model;
    }

    public function handleMultiSelectOpt(array $request): array
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

    public function create(array $request)
    {
        $consultation = array_only($request, [
            'user_id', 'advise', 'symptom', 'internal_remark', 'specialists', 'syndromes', 'diagnoses'
        ]);
        Consultation::create($consultation);
    }


    public function delete(Consultation $model)
    {
        $model->delete();
    }
}

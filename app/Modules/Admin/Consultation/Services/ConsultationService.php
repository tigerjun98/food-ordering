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

class ConsultationService
{
    private Consultation $model;

    public function __construct()
    {
        $this->model = new Consultation();
    }

    public function edit(int $id)
    {
        $consultation = $this->model->find($id) ?? [];
        $patient = $consultation ? $consultation->patient : User::find($id);
        if(!$patient){
            abort(404);
        }
        $onHold = (new QueueService())->canOnHold($patient, $consultation);

        session(['redirect' => url()->previous()]);

        return [$consultation, $patient, $onHold];
    }

    public function store(array $request): Consultation
    {
        $request = $this->optionExistsOrCreate($request);
        $consultation = array_only($request, [
            'user_id', 'advise', 'symptom', 'internal_remark', 'specialists', 'syndromes', 'diagnoses', 'consulted_at'
        ]);

        $model = \DB::transaction(function () use($request, $consultation) {
            $model = $this->model->updateOrCreate(['id' => $request['id'] ], $consultation);
            (new ConsultationPrescriptionService($model))->store($request);
            (new QueueService())->consulted($model);
            return $model;
        });

        $queue = Queue::where('consultation_id', $model->id)->first();
        if($queue){
            (new QueueService())->notifyReceptionist($queue);
        }

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
        foreach ($model->attachments as $attachment){
            (new AttachmentService)->delete($attachment);
        }
        (new ConsultationPrescriptionService($model))->delete();
        $model->delete();
    }
}

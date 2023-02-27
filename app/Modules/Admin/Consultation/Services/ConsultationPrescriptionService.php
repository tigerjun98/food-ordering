<?php

namespace App\Modules\Admin\Consultation\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\User;
use App\Modules\Admin\Option\Services\QueueService;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class ConsultationPrescriptionService
{
    private Prescription $model;
    private Consultation $relation;
    private int $sorting = 0;

    public function __construct(Consultation $consultation)
    {
        $this->model = new Prescription();
        $this->relation = $consultation;
    }


    public function handleCombination(array $request, Prescription $prescription, int $key)
    {
        $combinationColumn = ['medicine_id', 'quantity'];
        foreach( $combinationColumn as $column ){
            $combination[$column] = $request[$column][$key] ?? '';
        }

        if( is_array($combination['medicine_id']) ){
            (new ConsultationPrescriptionCombinationService($prescription))->store($combination);
        }
    }

    public function storePrescription(array $request, int $key): Prescription
    {
        $columns = ['remark', 'category', 'time_per_day', 'dose_per_time', 'dose_daily', 'metric', 'direction', 'combination_amount'];

        $prescription = [
            'consultation_id'   => $this->relation->id,
            'sorting'           => $this->sorting++
        ];


        foreach( $columns as $column ){
            $prescription[$column] = $request[$column][$key] ?? null;
        }
        $prescription = $this->model->create($prescription);
        return $prescription;

    }

    public function store(array $request): Consultation
    {
        $this->delete();

        $category = $request['category'] ?? [];
        foreach ( $category as $key => $item ){
            $prescription = $this->storePrescription($request, $key);
            if (array_key_exists($item, Medicine::getCategoryList())) { // array key contain
                $this->handleCombination($request, $prescription, $key);
            }
        }

        return Consultation::find($this->relation->id);
    }

    public function delete()
    {
        foreach ($this->relation->prescriptions as $prescription){
            $prescription->delete();
            (new ConsultationPrescriptionCombinationService($prescription))->delete();
        }
    }
}

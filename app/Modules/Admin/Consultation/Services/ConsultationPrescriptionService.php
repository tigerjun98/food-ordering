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

class ConsultationPrescriptionService
{
    private Prescription $model;
    private Consultation $relation;

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
        (new ConsultationPrescriptionCombinationService($prescription))->store($combination);
    }

    public function storePrescription(array $request, int $key): Prescription
    {
        $columns = ['category', 'time_per_day', 'dose_per_time', 'dose_daily', 'metric', 'direction'];

        $prescription = [
            'consultation_id' => $this->relation->id,
        ];

        foreach( $columns as $column ){
            $prescription[$column] = $request[$column][$key];
        }
        $prescription = $this->model->create($prescription);
        return $prescription;

    }

    public function store(array $request): Consultation
    {
        $this->reset();

        foreach ( $request['category'] as $key => $item ){

            $prescription = $this->storePrescription($request, $key);

            if($item < 4){
                $this->handleCombination($request, $prescription, $key);
            }
        }

        return Consultation::find($this->relation->id);
    }

    public function reset()
    {
        foreach ($this->relation->prescriptions as $prescription){
            $prescription->delete();
        }
    }
}

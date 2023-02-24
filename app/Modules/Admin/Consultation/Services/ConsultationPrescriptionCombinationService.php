<?php

namespace App\Modules\Admin\Consultation\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\PrescriptionCombination;
use App\Models\User;
use App\Modules\Admin\Option\Services\QueueService;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class ConsultationPrescriptionCombinationService
{
    private PrescriptionCombination $model;
    private Prescription $relation;
    private int $sorting = 0;

    public function __construct(Prescription $relation)
    {
        $this->model = new PrescriptionCombination();
        $this->relation = $relation;
    }

    public function medicineExistOrCreate($medicineId): Medicine
    {
        $medicine = Medicine::find($medicineId);
        if(!$medicine){
            $medicine = Medicine::create([
                'name_'.app()->getLocale() => $medicineId,
                'category' => $this->relation->category
            ]);
        }

        return $medicine;
    }

    public function store(array $request)
    {
        $this->delete();

        foreach ( $request['medicine_id'] as $key => $item ){

            $combination = [
                'prescription_id'   => $this->relation->id,
                'sorting'           => $this->sorting++
            ];

            $combination['medicine_id'] = $this->medicineExistOrCreate($item)->id;
            $combination['quantity'] = $request['quantity'][$key];
            $this->model->create($combination);
        }
    }

    public function delete()
    {
        foreach ($this->relation->combinations as $relation){
            $relation->delete();
        }
    }
}

<?php

namespace App\Modules\Admin\Prescription\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\User;
use App\Modules\Admin\Option\Services\OptionService;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class PrescriptionService
{
    private Prescription $model;
    private Consultation $relation;

    public function __construct()
    {
        $this->model = new Prescription();
        $this->relation = new Consultation();
    }

    public function store(array $request): Consultation
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

    public function delete()
    {
        foreach ($this->relation->prescriptions as $prescription){
            $prescription->delete();
        }
    }
}

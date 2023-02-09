<?php

namespace App\Modules\Admin\Consultation\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\User;
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
        $model = $this->model->find($request['id']);
        $model
            ? $model->update($request)
            : $this->model::create($request);

        return $this->model->find($request['id']);
    }

    public function delete(Consultation $model)
    {
        $model->delete();
    }
}

<?php

namespace App\Modules\Admin\Medicine\Services;

use App\Exceptions\CommonException;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\PrescriptionCombination;
use App\Models\User;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class MedicineService
{
    private Medicine $model;

    public function __construct()
    {
        $this->model = new Medicine();
    }

    public function getCategory($type)
    {
        switch (true) {
            case ($type == Medicine::TABLET || $type == Medicine::CAPSULE):
                return Medicine::SOLID;
            case ($type == Medicine::GRANULE || $type == Medicine::POWDER):
                return Medicine::PARTICLE;
            case ($type == Medicine::LIQUID):
                return Medicine::FLUID;
            default:
                return 0;
        }
    }

    public function store(array $request): Medicine
    {
        $request['category'] = $this->getCategory($request['type']);
        return $this->model->updateOrCreate(['id' => $request['id'] ], $request);
    }

    public function occupied(Medicine $medicine): bool
    {
        return PrescriptionCombination::where('medicine_id', $medicine->id)
                ->count() > 0;
    }


    public function delete(Medicine $medicine)
    {
        !self::occupied($medicine) ? $medicine->delete() : throwErr(trans('common.permission_denied'));
    }
}

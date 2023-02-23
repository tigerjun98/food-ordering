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
    private Medicine $medicine;

    public function __construct()
    {
        $this->model = new Medicine();
    }

    public function getCategory($type)
    {
        switch (true) {
            case ($type == 1 || $type == 2):
                return Medicine::SOLID;
            case ($type == 3 || $type == 4):
                return Medicine::PARTICLE;
            case ($type == 5):
                return Medicine::LIQUID;
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

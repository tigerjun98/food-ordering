<?php

namespace App\Modules\Admin\Medicine\Services;

use App\Exceptions\CommonException;
use App\Models\Admin;
use App\Models\Medicine;
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

    public function store(array $request): Medicine
    {
        $medicine = $this->model->find($request['id']);
        $medicine
            ? $medicine->update($request)
            : $this->model::create($request);

        return $this->model->find($request['id']);
    }

    public function delete(Medicine $medicine)
    {
        $this->deleteValidation($medicine);
        $medicine->delete();
    }

    public function deleteValidation(Medicine $medicine)
    {
        throw new CommonException('Permission denied!');
    }
}

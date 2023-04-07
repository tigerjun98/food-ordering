<?php

namespace App\Modules\Admin\Fee\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Fee;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\User;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class FeeService
{
    private Fee $model;

    public function __construct()
    {
        $this->model = new Fee();
    }

    public function store(array $request): Fee
    {
        return $this->model->updateOrCreate(['id' => $request['id'] ?? new_id() ], $request);
    }

    public function delete(Fee $model)
    {
        $model->delete();
    }
}

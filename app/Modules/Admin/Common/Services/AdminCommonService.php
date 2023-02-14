<?php

namespace App\Modules\Admin\Common\Services;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class AdminCommonService
{
    private Admin $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

}

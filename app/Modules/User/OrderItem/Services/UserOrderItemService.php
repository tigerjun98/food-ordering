<?php

namespace App\Modules\User\OrderItem\Services;

use App\Models\Admin;
use App\Models\Attachment;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\throwException;

class UserOrderItemService
{
    private OrderItem $model;

    public function __construct()
    {
        $this->model = new OrderItem();
    }

}

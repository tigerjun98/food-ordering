<?php

namespace App\Modules\Admin\Transaction\Services;

use App\Models\Transaction;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class CartService
{
    private Transaction $transaction;

    public function __construct()
    {
        $this->transaction = new Transaction();
    }

    public function create()
    {

    }
}

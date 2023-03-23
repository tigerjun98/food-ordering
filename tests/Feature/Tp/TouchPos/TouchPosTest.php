<?php

namespace Tests\Feature\Tp\TouchPos;

use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\Prescription;
use App\Models\User;
use App\Modules\Tp\TouchPos\DynamodService;
use App\Modules\Tp\TouchPos\DynamodServices\DynamodStockService;
use App\Modules\Tp\TouchPos\Services\TouchPosSalesService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TouchPosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_direct_cash_sales()
    {
        (new TouchPosSalesService())->syncStock(1);
        $this->assertTrue(true);
    }

    public function test_find_stocks_by_id()
    {
        (new DynamodStockService())->findStocksById('05040402210007');
        $this->assertTrue(true);
    }

    public function test_find_stocks_by_barcode()
    {
        (new DynamodStockService())->findStocksByBarcode('91004');
        $this->assertTrue(true);
    }

}

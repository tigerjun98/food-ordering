<?php

namespace Tests\Feature\Tp\TouchPos;

use App\Models\Consultation;
use App\Modules\Tp\TouchPos\DynamodService;
use App\Modules\Tp\TouchPos\DynamodServices\DynamodStockService;
use App\Modules\Tp\TouchPos\Services\TouchPosCreateSalesService;
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

//    public function test_find_direct_cash_sales()
//    {
//        (new TouchPosSalesService())->findSales('01WAH-1000005');
//        $this->assertTrue(true);
//    }

    public function test_create_direct_cash_sales()
    {
        // $consultation = Consultation::all()->random();
        $consultation = Consultation::find('2472461794');
        (new TouchPosCreateSalesService($consultation))->createSales();
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

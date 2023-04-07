<?php

namespace Tests\Feature\Tp\TouchPos;

use App\Models\User;
use App\Modules\Tp\TouchPos\DynamodService;
use App\Modules\Tp\TouchPos\DynamodServices\DynamodCustomerService;
use App\Modules\Tp\TouchPos\DynamodServices\DynamodStockService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DynamodCustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

//    public function test_create_customer()
//    {
//        $user = User::find('669251744');
//        (new DynamodCustomerService())->createCustomer($user);
//        $this->assertTrue(true);
//    }

    public function test_get_customers()
    {
        (new DynamodCustomerService())->getCustomers(1);
        $this->assertTrue(true);
    }
//
//    public function test_sync_customers()
//    {
//        (new DynamodCustomerService())->syncCustomers(1);
//    }
//
//    public function test_find_customers_by_id()
//    {
//        (new DynamodCustomerService())->findCustomersById('1611819829');
//        $this->assertTrue(true);
//    }

}

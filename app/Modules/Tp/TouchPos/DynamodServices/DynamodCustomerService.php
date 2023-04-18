<?php

namespace App\Modules\Tp\TouchPos\DynamodServices;

use App\Models\Admin;
use App\Models\TouchPos\Stock;
use App\Models\User;
use App\Modules\Admin\Role\Services\RoleService;
use App\Modules\Tp\TouchPos\Services\TouchPosService;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class DynamodCustomerService
{
    private TouchPosService $service;
    private User $model;
    private int $page;

    public function __construct()
    {
        $this->service = new TouchPosService(TouchPosService::DYNAMOD);
        $this->model = new User();
        $this->page = 1;
    }

    public function createCustomer(User $user): ?User
    {
        $data = array (
            'Customer' =>
                array (
                    'CustomerRecord' =>
                        array (
                            'AcCustomerID' => str(abs( crc32( uniqid() ) )),
                            'AcCustomerName' => $user->name_en,
                            'AcTermID' => 'CASH',
                            'AcAreaID' => 'NA',
                            'AcCusGroupID' => 'NA',
                            'AcCusUDGroupID' => 'NA',
                            'BillingAddress1' => '',
                            'BillingAddress2' => '',
                            'BillingAddress3' => '',
                            'BillingAddress4' => '',
                            'BillingTel1' => '',
                            'BillingTel2' => '',
                            'BillingFax1' => '',
                            'BillingFax2' => '',
                            'BillingPostalCode' => '',
                            'BillingContact1' => '',
                            'BillingContact2' => '',
                            'BillingEmail' => '',
                            'BillingHomePage' => '',
                            'IsActive' => 'Y',
                            'Notes' => '',
                            'AcCustomerNickName' => '',
                            'DateOfBirth' => dateFormat($user->dob),
                            'IsMember' => 'N',
                            'Gender' => 'M',
                            'MemberNo' => '',
                            'MobileNo' => '',
                            'IdentityNo' => '',
                            'MemberJoinDate' => dateFormat(Carbon::now()),
                            'MemberExpireDate' => '2099-12-31',
                            'AcMemberEthnicID' => 'NA',
                            'AcMemberIncomeID' => 'NA',
                            'AcMemberOccupationID' => 'NA',
                            'PriceCode' => '1',
                            'AcSalesmanID' => 'NA',
                            'MemberNotes' => '',
                            'EditDate' => dateFormat(Carbon::now()),
                        ),
                ),
        );

        $res = $this->service->post('Customers/simple/create', $data);
        if(isset($res->Customer->CustomerRecord)){
            $user->touch_pos_cust_id = $res->Customer->CustomerRecord->AcCustomerID;
            $user->touch_pos_cust_data = json_encode($res->Customer->CustomerRecord, true);
            $user->touch_pos_updated_at = Carbon::now();
            $user->touch_pos_created_at = Carbon::now();
            $user->save();
            return $user;
        }

    }

    public function getCustomers(int $page)
    {
        $res = $this->service->get('Customers/page/'.$page);
        return $res;
    }

    public function findCustomersById($custId)
    {
        $res = $this->service->get('Customers/CustomerID/'.$custId);
        if(count($res->Customers) > 0){
            return $res->Customers;
        }
        return false;
    }
}

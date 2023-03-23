<?php

namespace App\Modules\Tp\TouchPos\Services;

use App\Entity\Enums\StateEnum;
use App\Models\Admin;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class TouchPosSalesService
{
    private Client $client;
    private string $url;
    private TouchPosService $service;

    public function __construct()
    {
        $this->service = new TouchPosService(101);
        $this->url = config('services.touch_pos.url').':'.config('services.touch_pos.port');
    }

    public function getDirectCashSales($docNo)
    {

    }

    public function createSales()
    {
        $data = array (
            'OrderMaster' =>
                array (
                    'DocumentNo' => '',
                    'VendorOrderNo' => '',
                    'TerminalNo' => 'String',
                    'OrderDateTime' => '/Date(-62135596800000-0000)/',
                    'MemberCardNo' => 'String',
                    'CustomerFirstName' => 'String',
                    'CustomerLastName' => 'String',
                    'Cashier' => 'String',
                    'Remark' => 'String',
                    'VendorChannel' => 'String',
                    'Pax' => 0,
                    'TableNo' => 'String',
                    'IsPaid' => false,
                    'RoundCent' => 0,
                    'ServiceChargeAmount' => 0,
                    'DoNotPrint' => false,
                ),
            'OrderDetail' =>
                array (
                    0 =>
                        array (
                            'Barcode' => 'String',
                            'Description' => 'String',
                            'Price' => 0,
                            'Quantity' => 0,
                            'TotalDiscountBeforeTax' => 0,
                            'FNBServiceType' => 'None',
                            'ItemModifier' =>
                                array (
                                    0 =>
                                        array (
                                            'Name' => 'String',
                                            'Barcode' => 'String',
                                            'Price' => 0,
                                            'Quantity' => 0,
                                            'TotalDiscountAfterTax' => 0,
                                            'ModifierGroup' => 'String',
                                        ),
                                ),
                        ),
                ),
            'OrderPayment' =>
                array (
                    0 =>
                        array (
                            'PaymentCode' => 'String',
                            'PaymentAmount' => 0,
                        ),
                ),
            'DeliveryOrderInfo' =>
                array (
                    'RecipientName' => 'String',
                    'RecipientTelNo' => 'String',
                    'RecipientAddress' => 'String',
                    'DeliveryTrackingNo' => 'String',
                    'DeliveryTrackingLink' => 'String',
                ),
        );

        $this->service->post('TouchSeries/Order', $data);
    }

}

<?php

namespace App\Modules\Tp\TouchPos\Services;

use App\Entity\Enums\ConsultationEnum;
use App\Entity\Enums\StateEnum;
use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Fee;
use App\Models\Medicine;
use App\Models\Prescription;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class TouchPosCreateSalesService
{
    private TouchPosService $service;
    private Consultation $consultation;
    private string $stock_barcode;

    public function __construct(Consultation $consultation)
    {
        $this->stock_barcode = "91042";
        $this->consultation = $consultation;
        $this->service = new TouchPosService(101);
    }

    public function getConsultionOrderDetails(): array
    {
        $doctorGroup = $this->consultation->doctor->group;
        $fee = Fee::where('category', ConsultationEnum::CONSULTATION)
            ->where('type', $doctorGroup)
            ->first();

        $note = $fee->full_name ?? 'Consultation fee';
        return $this->getOrderDetails($note, $fee->price ?? 0);
    }

    public function getPrescriptionOrderDetails(Prescription $prescription): array
    {
        $fee = Fee::where('category', $prescription->category)
            ->where('type', $prescription->combination_amount)
            ->first();

        if($fee){
            $prescription->price = $fee->price;
            $prescription->save();
            $note = $fee->full_name;

        } else{
            $note = $prescription->category_explain;
            if( in_array($prescription->category, array_keys(Medicine::getCategoryList())) ){
                $note .= '('.$prescription->combination_amount.$prescription->metric_explain.')';
            }
        }

        return $this->getOrderDetails($note, $fee->price ?? 0);
    }

    public function getOrderDetails($desc, $price): array
    {
        return [
            "Barcode" => $this->stock_barcode,
            "Description" => $desc,
            "Price" => $price,
            "Quantity" => 1,
            "TotalDiscountBeforeTax" => 0,
            "FNBServiceType" => "None",
            "ItemModifier" => []
        ];
    }

    public function createSales(): bool
    {
        $docNo = $this->submitSales($this->getConsultionOrderDetails());

        if($this->consultation->prescriptions){
            foreach ($this->consultation->prescriptions as $prescription){
                $details = $this->getPrescriptionOrderDetails($prescription);
                $this->submitSales($details, $docNo);
            }
        }
        return true;
    }

    public function submitSales(array $orderDetails, $docNo = ""): string
    {
        $data = [
            "OrderMaster" => [
                "DocumentNo" => $docNo,
                "VendorOrderNo" => "",
                "TerminalNo" => "",
                "OrderDateTime" => dateFormat(Carbon::now()),
                "MemberCardNo" => "",
                "CustomerFirstName" => "",
                "CustomerLastName" => "",
                "Cashier" => "",
                "Remark" => "",
                "VendorChannel" => "",
                "Pax" => 1,
                "TableNo" => "",
                "IsPaid" => false,
                "RoundCent" => 0,
                "ServiceChargeAmount" => 0,
                "DoNotPrint" => false
            ],
            "OrderPayment" => [
                [
                    "PaymentCode" => "",
                    "PaymentAmount" => 0
                ]
            ],
            "DeliveryOrderInfo" => [
                "RecipientName" => "",
                "RecipientTelNo" => "",
                "RecipientAddress" => "",
                "DeliveryTrackingNo" => "",
                "DeliveryTrackingLink" => ""
            ]
        ];
        $data['OrderDetail'] = $orderDetails;

        $res = $this->service->post('TouchSeries/Order', $data);

        if(isset($res->IsSuccess) && $res->IsSuccess){
            $this->consultation->touch_pos_doc_no = $res->DocumentNo;
            $this->consultation->touch_pos_request_status = true;
            $this->consultation->save();
            return $res->DocumentNo;
        }

        return false;
    }

}

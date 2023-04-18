<?php

namespace App\Modules\Tp\TouchPos\Services;

use App\Entity\Enums\ConsultationEnum;
use App\Entity\Enums\StateEnum;
use App\Libraries\TouchPos\TouchPosCreateSales;
use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Fee;
use App\Models\Medicine;
use App\Models\Prescription;
use App\Modules\Tp\TouchPos\DynamodServices\DynamodCustomerService;
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
    private string $doc_no;

    public function __construct(Consultation $consultation, string $docNo = "")
    {
        $this->doc_no = $docNo;
        $this->stock_barcode = "OTHER";
        $this->consultation = $consultation;
        $this->service = new TouchPosService(101);
    }

    public function getConsultationFee(): array
    {
        $doctorGroup = $this->consultation->doctor->group;
        if($doctorGroup)
            $fee = Fee::Consultation()->where('type', $doctorGroup->id)->first();

        $note = $fee->full_name ?? 'Consultation fee';
        return [$note, $fee->price ?? 0];
    }

    public function isMedicine(int $category): bool
    {
        return count(
            array_compare(ConsultationEnum::getMedicineListing(), [$category])
            ) == 1;
    }

    public function getQuantity(int $amount, int $category): int
    {
        $maxFee = Fee::where('category', $category)->orderBy('type', 'desc')->first();
        if($amount > $maxFee->type){
            return ceil($amount / $maxFee->type);
        }

        return 1;
    }

    public function combineSameCategoryMedicine($prescriptions): array
    {
        $category = [];

        foreach ($prescriptions as $prescription){
            if($this->isMedicine($prescription->category)){
                $category[$prescription->category] = isset($category[$prescription->category])
                    ? $category[$prescription->category] + $prescription->combination_amount
                    : $prescription->combination_amount;
            }
        }

        return $category;
    }

    public function getMedicineFee(int $amount, int $category): float
    {
        $qty = $this->getQuantity($amount, $category);

        if($qty == 1){
            $price = Fee::where('category', $category)
                ->where('type', '>=', $amount)
                ->orderBy('type', 'asc')
                ->value('price');

        } else{
            $fee = Fee::where('category', $category)->orderBy('type', 'desc')->value('price');
            $price = $fee * $qty;
        }

        return $price;
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

        return [$note, $fee->price ?? 0];
    }

    public function getCustomerId(): string
    {

        if(!$this->consultation->patient->touch_pos_cust_id){
            $user = (new DynamodCustomerService())->createCustomer($this->consultation->patient);
            return $user->touch_pos_cust_id;
        }

        return $this->consultation->user->touch_pos_cust_id ?? '';
    }

    public function _sendMedicineSales(string $docNo): void
    {
        $prices = $this->combineSameCategoryMedicine($this->consultation->prescriptions);

        foreach ($prices as $category => $amount){
            $price = $this->getMedicineFee($amount, $category);
            $this->submitSales(ConsultationEnum::getMedicineListing()[$category], $price, $docNo, $this->getCustomerId());
        }
    }

    public function createSales(): string
    {
        if(!$this->consultation->touch_pos_requested_at){
            $this->consultation->touch_pos_requested_at = Carbon::now();
            $this->consultation->save();
        }

        [$desc, $price] = $this->getConsultationFee();
        $docNo = $this->submitSales($desc, $price, $this->doc_no, $this->getCustomerId());


        if($this->consultation->prescriptions){

            $this->_sendMedicineSales($docNo);

            foreach ($this->consultation->prescriptions as $prescription){
                if(! $this->isMedicine($prescription->category)){
                    [$desc, $price] = $this->getPrescriptionOrderDetails($prescription);
                    $this->submitSales($desc, $price, $docNo, $this->getCustomerId());
                }
            }
        }

        return $docNo;
    }

    public function submitSales($stock_desc, $stock_price, $docNo = "", $cust_id = ''): string
    {
        $create_sales = new TouchPosCreateSales();
        $create_sales->prepare_data(
            $docNo,
            $this->stock_barcode,
            $stock_desc,
            $stock_price,
            1,
            $cust_id
        );

        $res = $this->service->post('TouchSeries/Order', $create_sales->get_data());

        if(isset($res->IsSuccess) && $res->IsSuccess){
            $this->consultation->touch_pos_doc_no = $res->DocumentNo;
            $this->consultation->touch_pos_request_status = true;
            $this->consultation->touch_pos_response = json_encode($res, true);
            $this->consultation->touch_pos_responded_at = Carbon::now();
            $this->consultation->save();
            return $res->DocumentNo;
        }

        return false;
    }

}

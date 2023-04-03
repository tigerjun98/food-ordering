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

    public function createSales(): bool
    {
        [$desc, $price] = $this->getConsultationFee();
        if(!$this->consultation->touch_pos_requested_at){
            $this->consultation->touch_pos_requested_at = Carbon::now();
            $this->consultation->save();
        }
        $docNo = $this->submitSales($desc, $price);

        if($this->consultation->prescriptions){
            foreach ($this->consultation->prescriptions as $prescription){
                [$desc, $price] = $this->getPrescriptionOrderDetails($prescription);
                $this->submitSales($desc, $price, $docNo);
            }
        }
        return true;
    }

    public function submitSales($stock_desc, $stock_price, $docNo = ""): string
    {
        $create_sales = new TouchPosCreateSales();
        $create_sales->prepare_data(
            $docNo,
            $this->stock_barcode,
            $stock_desc,
            $stock_price
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

<?php

namespace App\Libraries\TouchPos;

use Carbon\Carbon;

class TouchPosCreateSales{

    private string $doc_no;
    private string $stock_barcode;
    private string $stock_desc;
    private float $stock_price;
    private int $stock_qty;

    public function prepare_data(
        $doc_no,
        $stock_barcode,
        $stock_desc,
        $stock_price,
        $stock_qty = 1,
    ) {
        $this->doc_no           = $doc_no;
        $this->stock_barcode    = $stock_barcode;
        $this->stock_desc       = $stock_desc;
        $this->stock_price      = $stock_price;
        $this->stock_qty        = $stock_qty;
    }

    public function get_data(): array
    {
        return [
            "OrderMaster" => [
                "DocumentNo" => $this->doc_no,
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
            ],
            "OrderDetail" => [
                [
                    "Barcode" => $this->stock_barcode,
                    "Description" => $this->stock_desc,
                    "Price" => $this->stock_price,
                    "Quantity" => $this->stock_qty,
                    "TotalDiscountBeforeTax" => 0,
                    "FNBServiceType" => "None",
                    "ItemModifier" => []
                ]
            ],
        ];

    }
}

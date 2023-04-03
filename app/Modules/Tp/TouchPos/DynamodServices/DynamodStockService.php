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

class DynamodStockService
{
    private TouchPosService $service;
    private Stock $model;
    private int $page;

    public function __construct()
    {
        $this->service = new TouchPosService(TouchPosService::DYNAMOD);
        $this->model = new Stock();
        $this->page = 1;
    }

    public function getStocks(int $page)
    {
        return $this->service->get('Stocks/page/'.$page);
    }

    public function syncStock($maxPage = 0): bool
    {
        try{
            if($this->page > $maxPage) return true;
            $res = $this->getStocks($this->page);
            $this->syncData($res);

            if( count($res->Stocks) == 20 ){
                $this->page++;
                $this->syncStock();
            }

            return true;

        } catch (\Exception $e) {

            $msg = sprintf('Error while syncStock, file: %s, line: %s, message: %s', $e->getFile(), $e->getLine(), $e->getMessage());
            \Log::channel('touch-pos')->error($msg);
            return false;
        }
    }

    public function syncData($res)
    {
        foreach ( $res->Stocks as $stock ){
            $this->insert($stock);
        }
    }

    public function findStocksById($stockId)
    {
        $res = $this->service->get('Stocks/StockID/'.$stockId);

        if(count($res->Stocks) > 0){
            $this->syncData($res);
            return $res->Stocks[0];
        }

        return false;
    }

    public function findStocksByBarcode($barcode)
    {
        $res = $this->service->get('Stocks/StockBarcode/'.$barcode);

        if(count($res->Stocks) > 0){
            $this->syncData($res);
            return $res->Stocks[0];
        }

        return false;
    }

    public function toArray($objs): array
    {
        $arrays = [];
        foreach($objs as $key => $obj) {
            $arrays[$key] = $obj;
        }

        return $arrays;
    }

    public function insert($data): Stock
    {
        $params['stock_id'] = $data->AcStockID;
        $params['barcode'] = $data->StockBarcode;
        $params['price'] = $data->StockPrice1;
        $params['data'] = json_encode($data, true);

        return $this->model->updateOrCreate([
            'stock_id' => $data->AcStockID
        ], $params);
    }
}

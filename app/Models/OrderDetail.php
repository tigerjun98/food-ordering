<?php

namespace App\Models;

use App\Traits\ApiResponser;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RevenueMonster\SDK\RevenueMonster;
use RevenueMonster\SDK\Exceptions\ApiException;
use RevenueMonster\SDK\Exceptions\ValidationException;
use RevenueMonster\SDK\Request\WebPayment;
use RevenueMonster\SDK\Request\QRPay;
use RevenueMonster\SDK\Request\QuickPay;


class OrderDetail extends Model
{
    use ApiResponser;

    protected $table = 'order_detail';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $casts = [
        'total_price' => 'float',
    ];

    protected $appends = ['full_name' ,'full_address'];

    public function getFullNameAttribute()
    {
        return $this->last_name .' '.$this->first_name;
    }

    public function getFullAddressAttribute()
    {
        return $this->address_1.' '.$this->address_2.', '.$this->postcode.' '.$this->area.', '.$this->state;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
//            if(!$data->status) $data->status = 0;
        });
    }

    public function getLocationDescription()
    {
        return ucfirst(str_replace('_',' ', $this->area)).', '.ucwords(str_replace('_',' ', $this->state));
    }

    public function orders(){
        return $this->hasMany(Order::class, 'order_detail_id','id');
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'order_detail_id','id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function payment(){
        return $this->hasOne(Payment::class, 'id','payment_id');
    }

    public function referral(){
        return $this->hasOne(User::class, 'id','referral_id');
    }

    public static $rules = [
        'name'      => 'max:50',
        'referral_username'  => 'alpha_dash|min:3|max:50|exists:users,name',
        'first_name'=> 'required|min:3|max:50',
        'last_name' => 'required|min:3|max:50',
        'phone'     => 'required|numeric|digits_between:10,11',
        'email'     => 'required|min:5|max:255',
        'status'    => 'required|digits:1|numeric',
        'postcode'  => 'required|digits:5',
        'address_1' => 'required|max:255',
        'address_2' => 'max:255',
        'state'     => 'required|exists:locations,state',
        'area'      => 'required|string',
        'total_price' => 'required|numeric|between:0,99999.99',
    ];

    public function getStatusDescription()
    {
        return static::getStatusList()[$this->status] ?? '';
    }

    public static function getStatusList()
    {
        return [
            0 => 'unpaid',
            1 => 'pending',
            2 => 'preparing',
            3 => 'shipping',
            4 => 'received',
            5 => 'completed',
            6 => 'cancelled',
            7 => 'refund',
            8 => 'refunded',
        ];
    }



    public static function getBadgeList($status)
    {
        $arr = [
            0 => 'danger',
            1 => 'secondary',
            2 => 'warning',
            3 => 'warning',
            4 => 'info',
            5 => 'success',
            6 => 'light',
            7 => 'secondary',
            8 => 'secondary',
        ];

        return $arr[$status];
    }

    public function generateRMSignature($method, $url, $nonceStr, $timestamp, $payload = [])
    {
        $res = openssl_pkey_get_private(Storage::disk('key')->get('rm_private_key.pem'));
        $signType = 'sha256';

        $arr = array();
        if (is_array($payload)) {
            $data = '';
            if (!empty($payload)) {
                array_ksort($payload);
                $data = base64_encode(json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_TAG));
            }
            array_push($arr, "data=$data");
        }
        array_push($arr, "method=$method");
        array_push($arr, "nonceStr=$nonceStr");
        array_push($arr, "requestUrl=$url");
        array_push($arr, "signType=$signType");
        array_push($arr, "timestamp=$timestamp");

        $signature = '';
        // compute signature
        openssl_sign(join("&", $arr), $signature, $res, OPENSSL_ALGO_SHA256);

        // free the key from memory
        unset($res);
        $signature = base64_encode($signature);
        return $signature;
    }

    // Find transaction by order id
    public function getPaymentStatus(){

        try{
            $rm = new RevenueMonster([
                'clientId'      => env('RM_CLIENT_ID'),
                'clientSecret'  => env('RM_CLIENT_SECRET'),
                'privateKey'    => Storage::disk('key')->get('rm_private_key.pem'),
                'isSandbox'     => false,
            ]);

            $timestamp = Carbon::now()->timestamp;
            $client = new Client();
            $fullUrl = env('RM_URL').'/v3/payment/online?checkoutId='.$this->payment->checkout_id;
            $str = Str::random(32);
            $sign = $this->generateRMSignature('get', $fullUrl, $str, $timestamp, '{}');
            $request = [
                'headers'   => [
                    'Authorization'     => 'Bearer '.$rm->accessToken,
                    'Content-Type'      => 'application/json',
                    'X-Nonce-Str'       => $str,
                    'X-Signature'       => 'sha256 '.$sign,
                    'X-Timestamp'       => $timestamp,
                ],
            ];

            $response = $client->request('get', $fullUrl, $request);
            $payload = json_decode($response->getBody()->getContents());
            return $payload->item->status;
        }
        catch (ConnectException $e) {
            $request['url'] = $fullUrl;
            $response = $e->getResponse();
            $this->log($this->id, $response->getBody()->getContents(), $request);

        }
        catch (RequestException $e) {
            $request['url'] = $fullUrl;
            $response = $e->getResponse();
            $this->log($this->id, $response->getBody()->getContents(), $request);
        }
    }

    public function callPaymentApi(){

        $rm = new RevenueMonster([
            'clientId'      => env('RM_CLIENT_ID'),
            'clientSecret'  => env('RM_CLIENT_SECRET'),
            'privateKey'    => Storage::disk('key')->get('rm_private_key.pem'),
            'isSandbox'     => false,
        ]);

        $pay = Payment::where('order_detail_id', $this->id)->first();
        if(!$pay){
            $paymentId = strval(abs( crc32( uniqid() ) ));
            $pay = new Payment();
            $pay->id            = $paymentId;

            OrderDetail::find($this->id)->update([
                'payment_id'    => $paymentId
            ]);
        } else{
            $pay->retry         = $pay->retry + 1;
        }
        $pay->order_detail_id   = $this->id;
        $pay->status            = 2;
        try {

            $amount = (int)str_replace(".", "", number_format($this->total_price, 2));
            $amount = 10;

            $wp = new WebPayment();
            $wp->order->id = strval($this->id);
            $wp->order->title = 'Web Payment';
            $wp->order->currencyType = 'MYR';
            $wp->order->amount = $amount;
            $wp->order->detail = '';
            $wp->order->additionalData = '';
//            $wp->customer->userId = strval($this->user_id);
//            $wp->customer->email = $this->email;
//            $wp->customer->countryCode = '60';
//            $wp->customer->phoneNumber = ltrim($this->phone, 0);
            $wp->storeId = env('RM_STORE_ID');
            $wp->redirectUrl = route('payment.', $this->id);
            $wp->notifyUrl = env('APP_URL').'/RMCallback/'.$this->id;
            $wp->layoutVersion = 'v3';
            $pay->request       = json_encode($wp);
            $response = $rm->payment->createWebPayment($wp);

            $pay->response      = json_encode($response);
            $pay->payment_url   = $response->url;
            $pay->checkout_id   = $response->checkoutId;
            $pay->status        = 1;
            $pay->save();

        } catch(ApiException $e) {
            $arr = [
                "statusCode"    => $e->getCode(),
                "errorCode"     => $e->getErrorCode(),
                "errorMessage"  => $e->getMessage(),
            ];
            $this->log($this->id, json_encode($arr));
            throw \Illuminate\Validation\ValidationException::withMessages($arr);

        } catch(ValidationException $e) {
            $this->log($this->id, $e->getMessage());
            throw \Illuminate\Validation\ValidationException::withMessages([
                "errorMessage"  => $e->getMessage(),
            ]);

        } catch(Exception $e) {
            $this->log($this->id, $e->getMessage());
            throw \Illuminate\Validation\ValidationException::withMessages([
                "errorMessage"  => $e->getMessage(),
            ]);
        }


    }

    public static function Filter(){
        return [
            'id'            => ['type' => 'text', 'label' => 'id' ],
            'referral'      => ['type' => 'text', 'label' => 'referral_username' ],
            'name'          => ['type' => 'text', 'label' => 'username' ],
            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
            'created_at'    => ['type' => 'date', 'label' => 'sales_from_and_to' ],
            'commission'    => ['label'=> 'commission', 'type' => 'select', 'option' => CommissionDetail::whereNotNull('name_en')->pluck('name_en', 'id')],
        ];
    }

    public function scopeFilter($query, $request)
    {
        foreach (static::Filter() as $column => $item){
            if($item['type'] == 'text'){
                if($column == 'referral' && $request->{$column} != ''){
                    $query->whereHas('referral', function ($q) use($column){
                        $q->where('name', 'like', '%'.request()->input($column).'%');
                    });
                } elseif($column == 'id' && $request->{$column} != ''){
                    $query->where('id',request()->input($column));
                } elseif($request->{$column} != ''){
                    $query->whereHas('user', function ($q) use($column){
                        $q->where($column, 'like', '%'.request()->input($column).'%');
                    });
                }
            }
            if($item['type'] == 'select'){
                if($request->{$column} != ''){

                    if($column == 'commission'){
                        $commission = CommissionDetail::find($request->{$column});
                        if($commission){
                            $query->where('created_at', '>=',date("Y-m-d H:i:00", strtotime($commission['start_at'])))
                                ->where('created_at', '<=',date("Y-m-d H:i:00", strtotime($commission['end_at'])));
                        }
                    } else if (str_contains($request->{$column}, ',')) {
                        $query->whereIn($column, explode(",",$request->{$column}));
                    } else{
                        $query->where($column, $request->{$column});
                    }
                }
            }

            if($item['type'] == 'date'){
                if($request->{$column.'_before'} != '' && $request->{$column.'_after'} != ''){
                    $query->whereDate($column,'>=',date("Y-m-d", strtotime(request()->input($column.'_after'))))
                        ->whereDate($column,'<=',date("Y-m-d", strtotime(request()->input($column.'_before'))));
                }
            }

        }

        return $query;

    }
}

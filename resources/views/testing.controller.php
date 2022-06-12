
<?php

use App\Models\Booking;
use App\Models\BookingPoint;
use App\Models\Log;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{
//    models
    public static function setting($name) {
        return Setting::where('setting_name',$name)->value('setting_message');
    }
//    request return filter
//    request return filter
    public function filters()
    {
        return [
//            'email' => 'trim|lowercase',
            'shop_name' => 'trim|lowercase|escape',
            'shop_name' => 'trim|lowercase|escape',
        ];
    }




    public function remove(Request $request){
        do {
            $point = BookingPoint::where('booking_id',$request->id)->delete();
            if(!$point){
                return redirect()->back()->withErrors('Failed to remove. Try again later!');
            }
            $point = BookingPoint::where('booking_id',$request->id)->first();
        } while ($point);
        $remove = Booking::where('booking_id',$request->id)->delete();
        if($remove){
            return redirect()->back()->withSuccess('Remove Successful');
        }
        else{
            return redirect()->back()->withErrors('Failed to remove. Try again later!');
        }
    }


    public function testing(Request $request){

        // query merge
        $result = DB::table(DB::raw("({$query_2->toSql()}) as query_2"))
            ->mergeBindings($query_2)
            ->where('username', 'test0011')
            ->get();

        // random number
        $digits = 4;
        $random = rand(pow(10, $digits-1), pow(10, $digits)-1);

        function unique_code($limit)
        {
            return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
        }
        echo unique_code(8);
        // Output looks
//        s5s108df


        $this->validate($request, [
            'phone'     => 'required|numeric',
            'prefix'    => 'required|numeric',
        ]);

        $input['notification_id'] = abs( crc32( uniqid() ) );
        $validator = Validator::make($request->all(), [
//            if have than check, use something
            'email'             => 'sometimes|required|email',
            'rate'              => 'required|numeric|between:0,99.99',
            'number'            => 'required|numeric|min:5|max:200',
            'state_name'        => 'required|max:100|unique:state',
            'phone'             => 'required|numeric|digits_between:11,12|digits:5|unique:users,phone,'.$request->id,
            'price'             => "required|regex:/^\d*(\.\d{1,2})?$/",
            'until_date'        => 'date|date_format:Y-m-d|after_or_equal:from_date|after:today',
            'file'              => 'file|mimes:jpeg,png,jpg|max:2048',
            'country_name'      => [
                'required','max:100',
                Rule::unique('country')->ignore($request->id, 'country_id')
            ],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return redirect()->back()->withErrors('Failed to remove. Foreign Key exists!');
        return redirect()->back()->withSuccess('Create Successful');
        return redirect()->back()->withErrors('Failed to. Try again later!');


        if ($request->has('paginate') ){
            $paginate = $request->paginate;
        }
        else{
            $paginate = 20;
        }


//        query where
//        multiple where
        $query = RoleAdmin::query();
        $users = $query
            ->join('role','role.id','role_admin.role_id')
            ->where('name','agent')
            ->where(function($q) {
                $q->whereNull('driver_id')
                    ->orWhereNull('transport_id');
            })
            ->paginate($paginate);

        $sideMenu = 'account';
        $sideMenu2 = 'agent';
        return view('backend.admin.account.driver',compact('users','sideMenu','sideMenu2','paginate'));

        if ($request->has('consumer') ){
            $orderBy = 'consumer';
            $query->where('is_consumer', true);
            $query2->where('is_consumer', true);
        }

        $orders = $query->paginate($paginate);

//        convert 24
        $datetime = $request->date.' '.$request->hrs.':'.$request->min.''.$request->period;
        $input['booking_datetime'] = date("Y-m-d G:i", strtotime($datetime));

        $datetime = '26-11-2019 02:50 pm';
        $datetime = date("Y-m-d G:i", strtotime($datetime));
        $time =  date("G:i", strtotime($request->hrs .':'. $request->min.' '.$request->period));
//        date filter
        $type = 'date';

        // relationship
        $query->whereHas('sponsor', function ($q) {
            $q->where('username', 'like', '%' . request()->input('filter_sponsor_username') . '%');
        });

        $date = null; $between = null;
        if ($request->has('date') ) {
            $validator = Validator::make($request->all(), [
                'date' => 'required|date|date_format:d-m-Y',
            ]);
            if (!$validator->fails()){
                $date = date("Y-m-d", strtotime($request->date));
                $query->whereRaw('DATE(booking_datetime) = ?', $date);
                $query2->whereRaw('DATE(booking_datetime) = ?', $date);
                $date = $request->date;
            }
        }
        if ($request->has('between') ){
            $validator = Validator::make($request->all(), [
                'date' => 'required|date|date_format:d-m-Y',
                'between' => 'required|date|date_format:d-m-Y',
            ]);

            if (!$validator->fails()){
                $query = Booking::query();
                $query2 = Booking::query();
                $date = date("Y-m-d", strtotime($request->date));
                $between = date("Y-m-d", strtotime($request->between));
                $query->whereDate('booking.booking_datetime','>=',$date)
                    ->whereDate('booking.booking_datetime','<=',$between);
                $query2->whereDate('booking.booking_datetime','>=',$date)
                    ->whereDate('booking.booking_datetime','<=',$between);
                $date = $request->date;
                $between = $request->between;
            }
        }

//        group by
        $sales = Order::whereIn('agent_id',$roleAgent)
            ->select(DB::raw('agent_id as user_id, SUM(total) as total'))
            ->groupBy('agent_id')
            ->orderBy('total','desc')
            ->paginate($paginate);

//        sum total by column
        $totalPoint = Wallet::where('type','success')
            ->where('user_id',$user_id)
            ->select((DB::raw("SUM(point) as total")))
            ->first();

//        filter duplicate data
        $results = Bank::join('order_detail','order_detail.bank_id','bank.id')
            ->select(DB::raw('group_concat(DISTINCT bank.name) as data'))
            ->get();

        $users = explode(',', $users[0]['data']);

//        query
        $wallets = $walletQuery->where(function($query){
            $query->where('wallet_history.request','completed');
            $query->orWhereNull('wallet_history.request');
        });

//        delete multiple
        $notif = Notification::where('user_id', '=', $request->id)->firstOrFail();
        $notif->destroy($notif->user_id);

//        straight minus
        User::where('username', $username)->decrement('credit', 100);

//        carbon datetime now today
        $today = Carbon::now()->format('Y-m-d H:i:s');
//        uppercase
        ucfirst();

        User::where('username', $username)->select(
            DB::raw('CONCAT(users.first_name," ",users.last_name) AS user_name'),
            DB::raw('DATE_FORMAT(booking.booking_datetime, "%m-%d-%y %H:%i:%s") AS date_time'),
            DB::raw('(select booking_point_address from booking_point where booking_id  =  booking.booking_id  and booking_point_type = "pickup") as point1'),
            'booking.booking_remark',
            DB::raw('CONCAT(
                        (select first_name from users where id = booking.driver_id)," ",
                        (select last_name from users where id  =  booking.driver_id)
                    ) AS driver_name'),
            'booking.booking_cost'
        );
    }
}

//update
User::where('id', $user_id)
    ->update(['admin_id' => $request->admin]);
Log::create([
    'log_id'        => abs( crc32( uniqid() ) ),
    'log_title'     => 'users',
    'user_id'       =>  Auth::user()->id,
    'log_remark'    =>  $logRemark,
    'log_message'   =>  'User id is '.$user_id,
    'log_action'    =>  $user_id,
]);
//controller function
return $this->sendRequest($uri);
//role id
$role = Auth::user()->role[0]['id'];
//send email
Mail::to($booking['passenger_email'])->send(new sendToUser($booking,$points));

//option
$output = $data->map(function ($item, $key) {
    $value = [
        'value' => $item->id,
        'text' => ($item->level['level_name_en'] ?? null) ." --> ". $item->full_name,
    ];
    return [$key => $value];
});

return response()->json($output);

route('admin.user.bingo_list', '?request=123',['type' => 'winner']);

$house = House::find($id);
$house->code = $house->code ?? $request->code;
$house->save();
//$.each( result, function(k, v) {
//    $('#agent_id').append($('<option>', {value:v[k]['value'], text:v[k]['text']}));
//                });

// call other controller
app('App\Http\Controllers\PrintReportController')->getPrintReport();
app(LogController::class)->store($response->getStatusCode(), $json->status, $msg, '3win8:setUserBalance');

//remove all data
DB::table('transaction')->delete();

//2 decimal
$amount = (float)sprintf("%.2f", $request->amount);

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Integer;

class Transaction extends Model
{
    use SoftDeletes;

    protected $table = 'transactions';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            $unique_id = strval(abs( crc32( uniqid() ) ));
            if(!$data->id) $data->id = $unique_id;
            if(!$data->status) $data->status = 0;
        });
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function receipt(){
        return $this->hasMany(Attachment::class, 'ref_id','id');
    }

    public function users()
    {
        return $this->belongsTo('User');
    }

    public static function convertCurrency($total, $from)
    {
        $arr = [
            0 => 4.4,
        ];

        return $total*$arr[$from];
    }

    public static function getTypeList($id = null)
    {
        $arr = [
            0 => 'deposit',
            1 => 'withdraw',
        ];

        if($id) return $arr[$id] ?? '';
        return $arr;
    }

    public static function getNetworkList($id = null)
    {
        $arr = [
            0 => 'TRC20',
            1 => 'ALGO',
            2 => 'ERC20',
        ];

        if($id) return $arr[$id] ?? '';
        return $arr;
    }

    public static function getNetworkAddress($network)
    {
        $arr = [
            0 => 'TRMedAS9hfrnTgP3FuKHrFjjvxzwj2JBc3',
            1 => 'TRMedAS9hfrnTgP3FuKHrFjjvxzwj2JBc3',
            2 => 'TRMedAS9hfrnTgP3FuKHrFjjvxzwj2JBc3',
        ];

        return $arr[$network] ?? '';
    }

    public static $rules = [
        'amount'        => 'required|numeric|min:1|max:99999999',
        'user_id'       => 'required|exists:users,id',
        'token'         => 'required',
        'network'       => 'required',
        'address'       => 'required',
        'status'        => 'required',
    ];

    public static function storeDepositReceipt(Request $request, $id)
    {
        try {
            \DB::beginTransaction();
            $image = $request->file('file');
            $type = $image->extension();
            $size = $image->getSize();
            $imageName = time().'.'.$type;
            $path = 'deposit/';
            $storagePath = Storage::disk('public')->put($path, $request->file);
            $storageName = basename($storagePath);

            $arr = [
                'path' => $path.$imageName,
                'file' => $imageName,
                'type' => 'deposit',
                'extension' => $type,
                'size' => $size,
                'ref_id' => $id
            ];
            Attachment::create($arr);
            // rename the file
            Storage::disk('public')->move($path.$storageName, $path.$imageName);

            \DB::commit();
        } catch (\Exception $e) {
            dd($e);

            \DB::rollback();
            throw new \Exception('failed');
        }
    }

    public static function deleteDepositReceipt(Request $request, $id)
    {
        try {
            \DB::beginTransaction();
            $path = 'deposit/';
            Storage::disk('public')->delete($path.$request->filename);
            Attachment::where('type', 'deposit')->where('path', $path.$request->filename)->forceDelete();
            \DB::commit();

        } catch (\Exception $e) {
            \DB::rollback();
            throw new \Exception('failed');
        }
    }

    public function getTokenExplainAttribute()
    {
        return static::getTokenList()[$this->token] ?? __('common.unknown_status');
    }

    public static function getTokenList(int $id=null)
    {
        $arr = [
            0 => 'USDT',
        ];

        return $id ? ($arr[$id] ?? '') : $arr;
    }

    public function getStatusExplainAttribute()
    {
        return static::getStatusList()[$this->status] ?? __('common.unknown_status');
    }

    public static function getStatusList()
    {
        return [
            0 => 'unpaid',
            1 => 'pending',
            2 => 'received',
            3 => 'completed',
            4 => 'cancelled',
            5 => 'refunding',
            6 => 'refunded',
        ];
    }

    public static function Filter(){
        return [
            'id'            => ['type' => 'text', 'label' => 'id' ],
            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
            'created_at'    => ['type' => 'date', 'label' => 'created_at' ],
        ];
    }

    public function scopeFilter($query, $request)
    {
        foreach (static::Filter() as $column => $item){
            if($item['type'] == 'text'){
                if($column == 'id' && $request->{$column} != ''){
                    $query->where('id',request()->input($column));
                } elseif($request->{$column} != ''){
                    $query->whereHas('user', function ($q) use($column){
                        $q->where($column, 'like', '%'.request()->input($column).'%');
                    });
                }
            }
            if($item['type'] == 'select'){
                if($request->{$column} != ''){
                    if (str_contains($request->{$column}, ',')) {
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

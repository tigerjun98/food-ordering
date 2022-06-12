<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Log extends Model
{
    protected $table = 'logs';
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
            $data->id = $unique_id;

//            Log::create([
//                'reference_id'      => $this->id,
//                'reference_table'   => 'order_detail',
//                'request'   => json_encode($request),
//                'response'  => json_encode($responseBodyAsString),
//                'location'  => 'OrderDetail.getPaymentStatus',
//                'message'   => $responseBodyAsString
//            ]);
        });
    }

    public function getAdminLogDescription()
    {

        if(strlen(trim($this->message)) == strlen($this->message)) {
            if($this->request){
                $params = json_decode($this->request);
                return __('logs.'.$this->message, ['id' => $params->id]);
            }
        }

        return $this->message;
    }


    public static $rules = [
        'type'     => 'required',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function admin(){
        return $this->hasOne(Admin::class, 'id','admin_id');
    }

    public static function getStatusList()
    {
        return [
            0 => 'error',
            1 => 'success',
        ];
    }

    public static function Filter(){
        return [
            'admin_username'=> ['type' => 'text', 'label' => 'username' ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
            'created_at'    => ['type' => 'date', 'label' => 'created_at' ],
        ];
    }

    public function scopeFilter($query, $request)
    {
        foreach (static::Filter() as $column => $item){
            if($item['type'] == 'text'){
                if($column == 'admin_username' && $request->{$column} != ''){
                    $query->whereHas('admin', function ($q) use($column){
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

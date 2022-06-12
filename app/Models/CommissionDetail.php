<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionDetail extends Model
{
    use HasFactory;

    protected $table = 'commission_detail';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $appends = ['event_date'];

    public function getEventDateAttribute()
    {
        return date("Y/m/d H:i", strtotime($this->start_at)).'-'.date("Y/m/d H:i", strtotime($this->end_at));
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
//            $unique_id = strval(abs( crc32( uniqid() ) ));
//            $data->id = $unique_id;
        });
    }

    public function commissions(){
        return $this->hasMany(Commission::class, 'commission_detail_id','id')->orderBy('sorting', 'asc');
    }

    public static $rules = [
        'name_en'       => 'required|string',
        'name_cn'       => 'required|string',
        'start_at'      => 'required|date_format:Y/m/d H:i',
        'end_at'        => 'required|date_format:Y/m/d H:i|after_or_equal:start_at',
    ];

    public static function Filter(){
        return [
            'name'          => ['type' => 'text', 'label' => 'name' ],
            'created_at'    => ['type' => 'date', 'label' => 'event_date' ],
        ];
    }

    public function scopeFilter($query, $request)
    {

        foreach (static::Filter() as $column => $item){
            if($request->{$column} != ''){
                $query->where($column, 'like', '%'.request()->input($column).'%');
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

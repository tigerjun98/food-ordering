<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Location extends Model
{
    use SoftDeletes;

    protected $table = 'locations';
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
        });
    }

    public static function getCountryList()
    {
        return [
            0 => 'malaysia',
        ];
    }

    public static function getStateList()
    {
        $items = Location::groupBy('state')->distinct()->orderBy('state', 'asc')->pluck('state');
        $arr[''] = '';
        foreach ($items as $item){
            $arr[$item] = ucfirst(str_replace('_', ' ', $item));
        }

        return $arr;
    }

    public static function getList($area=null)
    {
        return Location::where('area', $area)
            ->select('location', 'postcode')
            ->get()
            ->toArray();

        foreach ($items as $item){
            $arr[$item] = str_replace('_', ' ', $item);
        }

        return $arr;
    }

    public static function getAreaList($state=null)
    {
        $query = static::query();

        if($state) $query->where('state', $state);

        return $query->select('area')
            ->groupBy('area')
            ->get()
            ->pluck('area')
            ->toArray();
    }

}

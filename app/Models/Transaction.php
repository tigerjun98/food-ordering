<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Integer;

class Transaction extends Model
{
    use SoftDeletes, ModelTrait, HasFactory;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

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
        $arr = array_compare(Constants::$statusTexts, [
            Constants::DEPOSIT,
            Constants::WITHDRAW,
            Constants::EARN,
            Constants::LOSS,
        ]);

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
            $image = request()->file('file');
            $type = $image->extension();
            $size = $image->getSize();
            $imageName = time().'.'.$type;
            $path = 'deposit/';
            $storagePath = Storage::disk('public')->put($path, request()->file);
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
            Storage::disk('public')->delete($path.request()->filename);
            Attachment::where('type', 'deposit')->where('path', $path.request()->filename)->forceDelete();
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

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getStatusList()[$this->status] ?? __('common.unknown_status'),
        );
    }

    public static function getStatusList($id = null): array
    {
        $arr = array_compare(Constants::$statusTexts, [
            Constants::PAID,
            Constants::PENDING,
            Constants::PROCESSING,
        ]);
        return $id ? ($arr[$id] ?? []) : $arr;
    }

    protected function typeExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getStatusList()[$this->status] ?? __('common.unknown_status'),
        );
    }

    public static function Filter(){
        return [
            'id'            => ['type' => 'text', 'label' => 'id' ],
            'full_name'     => ['type' => 'text', 'label' => 'Full name' ],
            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
            'created_at'    => ['type' => 'date', 'label' => 'created_at' ],
        ];
    }

    public function scopeFilter($query)
    {
        if (request()->filled('full_name')) {
            $query->whereHas('user', function ($q){
                $q->where(\DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".request()->full_name."%");
            });
        }

        return $this->searchAll($this->parentFilterTrait($query), ['id']);
    }
}

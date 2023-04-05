<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $casts = [
        'updated_at' => 'datetime',
    ];
}

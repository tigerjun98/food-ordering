<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Validation\Rule;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;


class State
{
    public static function getStatesList()
    {
        return [
            'johor'         => 'Johor',
            'kedah'         => 'Kedah',
            'kelantan'      => 'Kelantan',
            'kl'            => 'Kuala Lumpur',
            'labuan'        => 'Labuan',
            'melaka'        => 'Melaka',
            'pahang'        => 'Pahang',
            'penang'        => 'Penang',
            'perak'         => 'Perak',
            'perlis'        => 'Perlis',
            'putrajaya'     => 'Putrajaya',
            'sabah'         => 'Sabah',
            'sarawak'       => 'Sarawak',
            'selangor'      => 'Selangor',
            'sembilan'      => 'Sembilan',
            'terengganu'    => 'Terengganu',
        ];
    }
}

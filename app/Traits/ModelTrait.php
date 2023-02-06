<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

trait ModelTrait {


    public function getImgNotFoundSrc()
    {
        return \Storage::disk('s3')->url('common/img_not_found.svg');
    }

    function timeElapsedString($col, $full = false) {
        $now = new \DateTime;
        $ago = new \DateTime($this->{$col});
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hrs',
            'i' => 'min',
            's' => 'sec',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public function timeDiff($col, $format = null) // get time different from now
    {
        $str = '';
        $start_date = new \Datetime($this->{$col});
        $since_start = $start_date->diff(new \DateTime('now'));
        if($this->{$col} < Carbon::now()) return 'Expired';

        if($format == 'min'){
            $minutes = $since_start->days * 24 * 60;
            $minutes += $since_start->h * 60;
            $minutes += $since_start->i;
            return $minutes;

        } else{
            if($since_start->i < 1) return 0; // Less than 1 minute
            if($since_start->days > 0) $str.= $since_start->days .'d ';
            if($since_start->h > 0) $str.= $since_start->h.'h ';
            if($since_start->i > 1) $str.= $since_start->i .'m';
        }


        return $str;
    }

    public function fundFormat($col, $decimal=2)
    {
        return number_format( $this->{$col} ?? 0 ,$decimal, ".",",");
    }

    public function dateFormat($col, $format = 'd-m-Y')
    {
        return dateFormat($this->{$col}, $format);
    }

//    public function scopeUser($q, $userId = null)
//    {
//        $id = $userId ? $userId : [Auth::check() ? Auth::id() : throwErr('Permission denied!')];
//        return $q->where('user_id', $id);
//    }

    public static function getShowHideLists($label = ['hidden', 'showing'])
    {
        return [
            0 => __('status.'.$label[0]),
            1 => __('status.'.$label[1]),
        ];
    }
}

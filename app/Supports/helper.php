<?php

use App\Exceptions\CommonException;

function new_id(): int
{
    return abs( crc32( uniqid() ) );
}

function request_has($params): bool
{
    return request()->filled($params) && request()->{$params} != '';
}

function request_str_convert($params)
{
    if(is_array(request()->{$params})) return request()->{$params};

    if(request()->filled($params)){
        if (!str_contains(request()->{$params}, ',')) { // string not contain ,
            return [request()->{$params}];
        }

        $arr = explode(',', request()->{$params}); // str to array
        if(is_array($arr) && count($arr) > 0){
            return $arr;
        }
    }
    return [];
}

function str_empty($params): bool // check if string is empty || null
{
    if(is_null($params) || $params == '') return true;

    return false;
}

function str_convert($params): array // convert string to array
{
    if(is_array($params)) return $params;

    if(is_string($params)){

        $arr = explode(',', $params); // str to array
        if(is_array($arr) && count($arr) > 0){
            return $arr;
        }

    }
    return [];
}

function str_combine($eloquent, String $col) // combine str from eloquent given
{
    $str = '';
    foreach ($eloquent as $item){
        $str .= $item->{$col}.', ';
    }
    return rtrim($str, ", "); // remove last str
}

function throwErr($msg){
    throw new CommonException(trans($msg));
}

function dateFormat($col, $format = 'd-m-Y'){
    return date($format, strtotime($col));
}

function stringToSecret(string $string = NULL){
    if (!$string) {
        return NULL;
    }
    $length = strlen($string);
    $visibleCount = (int) round($length / 4);
    $hiddenCount = $length - ($visibleCount * 2);
    return substr($string, 0, $visibleCount) . str_repeat('*', $hiddenCount) . substr($string, ($visibleCount * -1), $visibleCount);
}

function splitAddress($full_address){
    $address_length = strlen($full_address);
    $address2 = '';
    $address3 = '';

    if($address_length <= 40){
        $address1 = $full_address;
        return [$address1, $address2, $address3];
    }
    elseif($address_length <= 80){
        $equal_length = floor($address_length/2);
        $comma_index_before = strrpos(substr($full_address, 0, $equal_length), ',');
        $comma_index_after = strpos($full_address, ',', $equal_length);

        //validation if no comma in full address
        if ($comma_index_before === false) {
            $comma_index_before = $equal_length;
        }
        if ($comma_index_after === false) {
            $comma_index_after = $address_length;
        }

        $comma_index = $equal_length - $comma_index_before <= $comma_index_after - $equal_length ? $comma_index_before : $comma_index_after;

        $address1 = trim(substr($full_address, 0, $comma_index + 1));
        $address2 = trim(substr($full_address, $comma_index + 1));

        return [$address1, $address2, $address3];
    }else {
        $equal_length = floor($address_length/3);
        $combine_length = $equal_length * 2;
        $half_combine_length = $equal_length + ($equal_length/2);

        $comma_index_before = strrpos(substr($full_address, 0, $equal_length), ',');
        $comma_index_middle = strrpos(substr($full_address, $comma_index_before, $half_combine_length), ',');
        $comma_index_after = strpos($full_address, ',', $combine_length);

        //validation if no comma in full address
        if ($comma_index_before === false) {
            $comma_index_before = $equal_length;
        }
        if ($comma_index_middle === false) {
            $comma_index_middle = $half_combine_length;
        }
        if ($comma_index_after === false) {
            $comma_index_after = $address_length;
        }

        $comma_index = $equal_length - $comma_index_before <= $comma_index_after - $equal_length ? $comma_index_before : $comma_index_after;

        $comma_index_1 = $combine_length - $comma_index_middle <= $comma_index_after - $equal_length ? $comma_index_middle : $comma_index_after;

        $address1 = trim(substr($full_address, 0, $comma_index + 1));
        $address2 = trim(substr($full_address, $comma_index + 1, $comma_index_1));
        $address3 = trim(substr($full_address, strlen($address1) + strlen($address2) + 1));

        return [$address1, $address2, $address3];
    }
}

function array_except($array, $keys){
    foreach($keys as $key){
        unset($array[$key]);
    }
    return $array;
}

function array_compare($array, $key = []){
    return count($key) > 0 ? array_flip(array_filter(array_flip($array), function ($i) use ($key) {
        return in_array($i, $key);
    })) : $array;
}

function addError($msg)
{
    if (! is_array($msg)) {
        pushFlash('flash_error', $msg);
    } else {
        foreach ($msg as $key => $var) {
            if (is_array($var)) {
                foreach ($var as $k => $v) {
                    pushFlash('flash_error', $v);
                }
            } else {
                pushFlash('flash_error', $var);
            }
        }
    }
}

function addInfo($msg)
{
    if (! is_array($msg)) {
        pushFlash('flash_info', $msg);
    } else {
        foreach ($msg as $key => $var) {
            if (is_array($var)) {
                foreach ($var as $k => $v) {
                    pushFlash('flash_info', $v);
                }
            } else {
                pushFlash('flash_info', $var);
            }
        }
    }
}

function addSuccess($msg)
{
    if (! is_array($msg)) {
        pushFlash('flash_success', $msg);
    } else {
        foreach ($msg as $key => $var) {
            if (is_array($var)) {
                foreach ($var as $k => $v) {
                    pushFlash('flash_success', $v);
                }
            } else {
                pushFlash('flash_success', $var);
            }
        }
    }
}

function addValidatorMsg($arr)
{
    foreach ($arr->getMessages() as $key => $var) {
        foreach ($var as $k => $v) {
            addError($v);
        }
    }
}

function getValidImageMimeType()
{
    return [
        'image/gif', 'image/jpg', 'image/jpeg', 'image/png',
    ];
}

function getValidImageExtension()
{
    return [
        'gif', 'jpg', 'jpeg', 'png', 'svg'
    ];
}

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function isImage($name)
{
    if (\Request::hasFile($name)) {
        $images_mimes = getValidImageMimeType();
        if (in_array(\Request::file($name)->getMimeType(), $images_mimes)) return true;

    } else{
        $images_mimes = getValidImageExtension();
        foreach ($images_mimes as $ext){
            if(str_contains($name, '.'.$ext)) return true;
        }
    }
    return false;
}

function notEmpty($value)
{
    if ($value != '' && $value != null && $value != false) {
        return true;
    } else {
        return false;
    }
}

function isEmpty($value)
{
    return notEmpty($value) === true ? false : true;
}

function notDigit($value)
{
    if ($value != '' && $value != null && $value != false && $value != true && $value >= 0 && ctype_digit((string) $value)) {
        return false;
    } else {
        return true;
    }
}

function isDigit($value)
{
    if ($value != '' && $value != null && $value != false && $value != true && $value >= 0 && ctype_digit((string) $value)) {
        return true;
    } else {
        return false;
    }
}

function isFund($value)
{
    return preg_match_all('/[\d](.[\d]{1,2})?/im', $value) ? true : false;
}

function notFund($value)
{
    return preg_match_all('/[\d](.[\d]{1,2})?/im', $value) ? false : true;
}

function isPercentage($value)
{
    if (is_numeric($value) && $value <= 100) {
        return true;
    } else {
        return false;
    }
}

function notPercentage($value)
{
    if (is_numeric($value) && $value <= 100) {
        return false;
    } else {
        return true;
    }
}

function isNumber($value)
{
    return ctype_digit((string) $value) ? true : false;
}

function notNumber($value)
{
    return ctype_digit((string) $value) ? false : true;
}

function writeErrorLog($log)
{
    if ($log instanceof \Exception) {
        Log::error(
            'ERROR CODE = '.$log->getCode().": \n".'Unexpected ERROR on '.$log->getFile().' LINE: '.$log->getLine().', '.$log->getMessage()."\n"
        );
    } else {
        Log::error($log);
    }
}

function numberToWord($num)
{
    $num = ( string )(( int )$num);

    if($num == 0) return 'zero';

    if (( int )($num) && ctype_digit($num)) {
        $words = array();

        $num = str_replace(array(',', ' '), '', trim($num));

        $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven',
            'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen',
            'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');

        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty',
            'seventy', 'eighty', 'ninety', 'hundred');

        $list3 = array('', 'thousand', 'million', 'billion', 'trillion',
            'quadrillion', 'quintillion', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion',
            'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion',
            'octodecillion', 'novemdecillion', 'vigintillion');

        $num_length = strlen($num);
        $levels = ( int )(($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);

        foreach ($num_levels as $num_part) {
            $levels--;
            $hundreds = ( int )($num_part / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ($hundreds == 1 ? '' : 's') . ' ' : '');
            $tens = ( int )($num_part % 100);
            $singles = '';

            if ($tens < 20) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
            } else {
                $tens = ( int )($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = ( int )($num_part % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . (($levels && ( int )($num_part)) ? ' ' . $list3[$levels] . ' ' : '');
        }
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }

        $words = implode(', ', $words);

        $words = trim(str_replace(' ,', ',', $words), ', ');
        if ($commas) {
            $words = str_replace(',', ' and', $words);
        }

        return $words;
    }
}

function html($view, $compact, $code = 200, $message = null, $title = null)
{
    if(request()->ajax() || request()->wantsJson()){
        return response()->json(['title'=> $title, 'status' => $code, 'message' => $message, 'html' => view($view, $compact)->render()], $code);
    } else{
        return view($view, $compact);
    }
}

function makeResponse($code, $message = null, $data = [])
{
    if ($message instanceof \Exception) {
        $debug = config('env.APP_DEBUG');
        if ($debug === true) {
            $message = $message->getFile().' / '.$message->getLine().' . '.$message->getMessage();
        } else {
            $message = $message->getMessage();
        }
    }

    if ($code === true) {
        $code = 200;
    } elseif ($code === false) {
        $code = 422;
    }

    $data['status'] = $code;

    if (request()->ajax() || request()->wantsJson()) {
        if ($message != null) {
            $data['message'] = $message;
        } else {
            switch ($code) {
                case 422:
                    $data['message'] = trans('common.something_went_wrong');
                    break;
                case 200:
                    $data['message'] = null;
                    break;
                default:
                    $data['message'] = trans('common.unknown_error');
                    break;
            }
        }

        return response()->json($data)->setStatusCode($code);
    } else {
        switch ($code) {
            case 200:
                if ($message != null) {
                    addSuccess($message);
                } else {
                    addSuccess(trans('common.operation_success'));
                }
                break;
            default:
                if ($message != null) {
                    addError($message);
                } else {
                    addError(trans('common.something_went_wrong'));
                }

                if (isset($data['errors'])) {
                    foreach ($data['errors'] as $field => $data1) {
                        if (is_array($data1)) {
                            foreach ($data1 as $data2) {
                                addError($data2);
                            }
                        } else {
                            addError($data1);
                        }
                    }
                }

                break;
        }

        return redirect()->back()->withInput();
    }
}

function arrayToString($arr)
{
    return implode(",", array_keys($arr));
}

function fundFormat($fund, $decimal = 2)
{
    return number_format($fund, $decimal, '.', ',');
}

function isImageExtension($ext, $trim = false)
{
    $imgs_ext = ['png', 'jpg', 'jpeg', 'bmp', 'gif'];

    if ($trim === true) {
        $name = strtolower($ext);
        $split = explode('?', $name)[0];
        $split = explode('.', $split);

        return in_array(end($split), $imgs_ext);
    } else {
        return in_array(strtolower($ext), $imgs_ext);
    }
}

function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function safeFileFormat()
{
    return ['png', 'jpg', 'jpeg', 'bmp', 'gif', 'pdf', 'xlsx', 'docx'];
}

function isSafeFileFormat($ext)
{
    $ext = str_replace('.', '', $ext);

    return in_array($ext, safeFileFormat());
}

function getClassName($class)
{
    $str = get_class($class);
    $arr = explode('\\', $str);

    return end($arr);
}

function isValidImageExtension($name)
{
    return \Str::endsWith($name, ['.jpg', '.jpeg', '.gif', '.jpg', '.png', '.bmp']);
}

function encodeURIComponent($str)
{
    $revert = ['%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')'];

    return strtr(rawurlencode($str), $revert);
}

function getIpAddress()
{
    $req = request();
    if ($req->header('cf-connecting-ip')) {
        return $req->header('cf-connecting-ip');
    } else {
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            return $_SERVER['HTTP_CF_CONNECTING_IP'];
        } else {
            return $req->ip();
        }
    }
}

function sanitizeContactNumber($contact_number, $country = null)
{
    if ($country == null) {
        return $contact_number;
    } else {
        $can_format = false;

        if ($country instanceof \App\Models\Country) {
            $can_format = true;
        } elseif (is_int($country) && $country > 0) {
            $country = \App\Models\Country::find($country);

            if ($country) {
                $can_format = true;
            }
        }

        if ($can_format === true) {
            if ($country->country_code_alpha_2 == 'MY') {
                $contact_number = ltrim($contact_number, '+60');
                $contact_number = ltrim($contact_number, '0');
                // dd(preg_match('/^(\+?6?1)[0-46-9]-*[0-9]{7,8}/', $contact_number));
                if (! preg_match('/^(\+?6?1)[0-46-9]-*[0-9]{7,8}/', $contact_number)) {
                    throw new \Exception(trans('common.invalid_contact_number_format', ['eg' => '0123456789']));
                }
            } elseif ($country->country_code_alpha_2 == 'CN') {
                $contact_number = ltrim($contact_number, '+86');
//                $contact_number = ltrim($contact_number, '0');

                if (! preg_match('/^[0-9]{10,15}/', $contact_number)) {
                    throw new \Exception(trans('common.invalid_contact_number_format', ['eg' => '1065529988']));
                }
            }
        }

        return $contact_number;
    }
}

function generateRandomAlphaNumeric($length_of_string = 8, $all_capital = true)
{
    if ($all_capital === true) {
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

    } else {
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
    }

    return substr(str_shuffle($str_result), 0, $length_of_string);
}

function generateRandomAlpha($length_of_string = 8, $all_capital = true)
{
    $str_result = $all_capital ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' : 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result), 0, $length_of_string);
}

function formatBytes($size, $precision = 2)
{
    if ($size > 0) {
        $size = (int) $size;
        $base = log($size) / log(1024);
        $suffixes = [' bytes', ' KB', ' MB', ' GB', ' TB'];

        return round(pow(1024, $base - floor($base)), $precision).$suffixes[floor($base)];
    } else {
        return $size.' bytes';
    }
}

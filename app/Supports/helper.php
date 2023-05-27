<?php

use App\Exceptions\CommonException;

function array_only(array $request, array $key): array
{
    return array_filter(
        $request, fn ($index) => in_array($index, $key),
        ARRAY_FILTER_USE_KEY
    );
}

function new_id(): int
{
    return abs( crc32( uniqid() ) );
}

function request_has($params): bool
{
    return request()->filled($params) && request()->{$params} != '';
}

function request_str_convert($params): array
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
    if($format == 'r') $format = 'd M, Y H:i A';
    return date($format, strtotime($col));
}

function array_except($array, array $keys){

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

function get_string_between($string, $start, $end = null){

    if(!$end || !str_contains($string, $end)){
        return strrchr( $string, '/admin'); // get string after
    }


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


function html($view, $compact, $code = 200, $message = null, $title = null)
{
    if(request()->ajax() || request()->wantsJson()){
        return response()->json(['title'=> $title, 'status' => $code, 'message' => $message, 'html' => view($view, $compact)->render()], $code);
    } else{
        return view($view, $compact);
    }
}

function makeResponse($code, $message = null, $options = [])
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
    $data['data'] = is_array($options) ? $options : json_decode($options);

    if (request()->ajax() || request()->wantsJson()) {
        if ($message != null) {
            $data['message'] = $message;

        } else {
            switch ($code) {
                case 422:
                    $data['message'] = trans('common.something_went_wrong');
                    break;
                case 200:
                    $data['message'] = trans('common.operation_success');
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

function nricFormat($str)
{
    return strlen($str) == 12
        ? substr($str, 0, 6).'-'.substr($str, 6, 2).'-'.substr($str, 8, 4)
        : $str;
}

function fundFormat($fund, $decimal = 2)
{
    return number_format($fund, $decimal, '.', ',');
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

<?php

namespace App\Traits;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

trait ApiResponser
{
    /**
     * Return a success JSON response.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */

    protected function adminLog($message, $request=null)
    {
        $arr = [
            'request'           => json_encode($request),
            'status'            => 1,
            'admin_id'          => Auth::guard('admin')->id(),
            'message'           => $message,
            'location'          => Route::getCurrentRoute()->getActionName(),
        ];

        Log::create($arr);
    }

    protected function log($refid, $type, $request = null, $message = null)
    {

        $arr = [
            'reference_id'      => $refid,
            'type'              => $type,
            'request'           => json_encode($request),
            'status'            => 1,
            'message'           => $message,
            'location'          => Route::getCurrentRoute()->getActionName(),
        ];

        if(Auth::check()){
            $guard = Auth::guard('admin')->check();
            if($guard){
                $arr['admin_id'] = Auth::id();
            } else{
                $arr['user_id'] = Auth::id();
            }
        }

        Log::create($arr);
    }

    protected function errorLog($refid = null, $type = null, $status = 1, string $msg = null, $request = null, $response = null)
    {

        $arr = [
            'reference_id'      => $refid,
//            'reference_table'   => $reftable,
            'request'           => json_encode($request),
            'response'          => json_encode($response),
            'message'           => $msg,
            'status'            => $status,
            'location'          => Route::getCurrentRoute()->getActionName(),
        ];

        if(Auth::check()){
            $guard = Auth::guard('admin')->check();
            if($guard){
                $arr['admin_id'] = Auth::id();
            } else{
                $arr['user_id'] = Auth::id();
            }
        }

        Log::create($arr);
    }

    protected function success($data, string $message = null, string $redirect = null, int $code = 200)
    {
        return response()->json([
            'status'    => 'Success',
            'redirect'  => $redirect,
            'message'   => $message,
            'data'      => $data
        ], $code);
    }

    /**
     * Return an error JSON response.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error(string $message = null, int $code, $data = null)
    {

        $arr = [
            'request'           => json_encode($data),
            'message'           => $message,
            'status'            => 0,
            'location'          => Route::getCurrentRoute()->getActionName(),
        ];

        if(Auth::check()){
            $guard = Auth::guard('admin')->check();
            if($guard){
                $arr['admin_id'] = Auth::id();
            } else{
                $arr['user_id'] = Auth::id();
            }
        }

        Log::create($arr);

        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => $data
        ], $code);
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



}

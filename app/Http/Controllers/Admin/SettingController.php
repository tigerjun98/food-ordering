<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Setting;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class SettingController extends Controller {
    use ApiResponser;

    public function index(Request $request){
        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.setting.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = Setting::query();
        $data = $query
            ->filter($request)
            ->paginate(20);

        $option['data_path'] = 'admin.setting.table.table_data';
        $option['column'] = ['name', 'last_updated', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }
        else {
            return view($this->path, compact('data', 'option'));
        }
    }

    public function edit(Request $request, $id){

        $data = Setting::where('name', $id)->first();

        return response()->json([
            'html' => view('admin.setting.form.'.$id.'', compact('data', 'id'))->render()
        ]);
    }

    public function update(Request $request, $id){


        // Assign batchID to trade this update and ensure product type id won't keep changing.
        $batch_id = strval(abs( crc32( uniqid() ) ));
        try {
            \DB::beginTransaction();

            if($id == 'contact'){
                $arr = [
                    'value' => json_encode([
                        'phone'     => $request->phone,
                        'address'   => $request->address,
                        'email'     => $request->email,
                    ]),
                ];
            } else{
                $arr = [
                    'value' => $request->value,
                ];
            }

            $this->validate(new Request($arr), Setting::$rules);
            Setting::where('name', $id)->update($arr);

            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }

        return $this->success('', 'success');
    }

    public function uploadEditorContent(Request $request)
    {
        if($request->hasFile('upload')) {

            $this->validate($request, [
                'upload' => 'file|mimes:jpeg,png,jpg|max:10240',
            ]);

            $image = $request->file('upload');
            $type = $image->extension();
            $imageName = time().'.'.$type;
            $path = 'home/';
            $storagePath = Storage::disk('public')->put($path, $request->upload);
            $storageName = basename($storagePath);
            $funcNum = $request->input('CKEditorFuncNum');
            // rename the file
            Storage::disk('public')->move($path.$storageName, $path.$imageName);

            $msg = 'Image successfully uploaded';
            $url = asset("storage/home/".$imageName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum') ? $request->input('CKEditorFuncNum') : 0;

            if($CKEditorFuncNum > 0){

                $msg = 'Image successfully uploaded';
                $renderHtml = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                @header('Content-type: text/html; charset=utf-8');
                echo $renderHtml;

            } else {

                $msg = 'Image successfully uploaded';
                $renderHtml = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                return response()->json([
                    'uploaded' => '1',
                    'fileName' => $imageName,
                    'url' => $url
                ]);
            }
        }
    }

    public function uploadDropzoneImage(Request $request, $id){

        $this->validate($request, [
            'file' => 'file|mimes:jpeg,png,jpg|max:10240',
        ]);

        $image = $request->file('file');
        $type = $image->extension();
        $imageName = time().'.'.$type;
        $path = 'settings/';
        $storagePath = Storage::disk('public')->put($path, $request->file);
        $storageName = basename($storagePath);

        // remove old file
        $exists = Setting::where('name', 'popup')->value('value');
        if($exists){
            Storage::disk('public')->delete($path, $exists);
        }

        // rename the file
        Storage::disk('public')->move($path.$storageName, $path.$imageName);
        $prev = Setting::where('name', $id)->value('value');
        Setting::where('name', $id)->update([
            'value' => $imageName
        ]);



        $arr['prev'] = $prev;
        $arr['new'] = $imageName;
        return $this->success($arr, 'success');
    }

    public function deleteDropzoneImage(Request $request, $id){

        $path = 'settings/';
        Storage::disk('public')->delete($path.$request->filename);
        Setting::where('name', $id)->update([
            'value' => ''
        ]);

        return $this->success('', 'success');
    }
}


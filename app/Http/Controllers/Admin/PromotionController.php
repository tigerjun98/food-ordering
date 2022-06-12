<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Promotion;
use App\Models\Review;
use App\Models\Setting;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class PromotionController extends Controller {
     use ApiResponser;

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.promotion.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = Promotion::query();
        $data = $query
            ->whereNotNull('status')
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path']    = 'admin.promotion.table.table_data';
        $option['column']       = ['id', 'status', 'start_from', 'end_at', 'label', 'title', 'url', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }

    public function edit(Request $request, $id){

        // remove temporary created product
        DB::table('promotions')->whereNull('status')->delete();

        // new row will create when user click create button
        $data = Promotion::find($id) ?? null;
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) Promotion::create(['id' => $id]);

        return response()->json([
            'html' => view('admin.promotion.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function update(Request $request, $id){

        try {
            \DB::beginTransaction();

            $log = !isset(Promotion::find($id)['status'])
                ? $this->adminLog('promotion_create', $request->all())
                : $this->adminLog('promotion_update', $request->all());

            $arr = [
                'status'    => intval($request->get('status')),
                'title_en'  => $request->get('title_en'),
                'title_cn'  => $request->get('title_cn'),
                'label_en'  => $request->get('label_en'),
                'label_cn'  => $request->get('label_cn'),
                'url'       => $request->get('url'),
                'desc_en'   => $request->get('desc_en'),
                'desc_cn'   => $request->get('desc_cn'),
                'start_at'  => explode('-', $request->get('event_date'))[0] ?? null,
                'end_at'    => explode('-', $request->get('event_date'))[1] ?? null,
            ];

            $this->validate(new Request($arr), Promotion::$rules);

            Promotion::where('id', $id)->update($arr);

            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401, $request->all());
        }
    }

    public function destroy(Request $request, $id){

        Promotion::where('id',$id)->delete();
        $this->adminLog('promotion_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function uploadDropzoneImage(Request $request, $id, $lang){

        $this->validate($request, [
            'file' => 'file|mimes:jpeg,png,jpg|max:10240',
        ]);

        $image = $request->file('file');
        $type = $image->extension();
        $imageName = time().'.'.$type;
        $path = 'promotions/';
        $storagePath = Storage::disk('public')->put($path, $request->file);
        $storageName = basename($storagePath);

        $exists = Promotion::find($id)->value('image_'.$lang);
        if($exists){
            Storage::disk('public')->delete($path, $exists);
        }

        // rename the file and store
        Storage::disk('public')->move($path.$storageName, $path.$imageName);
        Promotion::find($id)->update([
            'image_'.$lang => $imageName
        ]);

        $arr['prev'] = $exists;
        $arr['new'] = $imageName;
        return $this->success($arr, 'success');
    }

    public function deleteDropzoneImage(Request $request, $id, $lang){

        $path = 'promotions/';
        Storage::disk('public')->delete($path.$request->filename);
        Promotion::where('id', $id)->update([
            'image_'.$lang => null
        ]);

        return $this->success('', 'success');
    }
}

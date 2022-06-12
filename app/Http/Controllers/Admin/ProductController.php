<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Promotion;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class ProductController extends Controller {
    use ApiResponser;

    public function index(Request $request){
        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.product.index',compact('option'));
    }

    public function indexDt(Request $request){

        Product::whereNull('product_name')->forceDelete();

        $query = Product::query();
        $data = $query
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path'] = 'admin.product.table.table_data';
        $option['column'] = ['product_name', 'label', 'price', 'status', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }
        else {
            return view($this->path, compact('data', 'option'));
        }
    }

    public function edit(Request $request, $id){

        // remove temporary created product
        DB::table('products')->whereNull('product_name')->delete();

        // new row will create when user click create button
        $data = Product::find($id) ?? null;
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) Product::create(['id' => $id]);

        return response()->json([
            'html' => view('admin.product.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function destroy(Request $request, $id){

        if(Order::where('product_id', $id)->first()){
            return $this->error('order_exists', 401);
        }

        Product::where('id',$id)->delete();
        DB::table('product_type')->where('product_id',$id)->delete();
        DB::table('cart')->where('product_id',$id)->delete();

        $this->adminLog('product_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function update(Request $request, $id){

        // Assign batchID to trade this update and ensure product type id won't keep changing.
        $batch_id = strval(abs( crc32( uniqid() ) ));

        try {
            \DB::beginTransaction();
            if($request->get('product_type')){
                foreach($request->get('product_type') as $key => $name) {
                    $arr = [
                        'product_id'            => $id,
                        'product_name'          => $request->get('product_name_en'),
                        'product_type_label'    => $request->get('product_type_label')[$key],
                        'product_type_name'     => $name,
                        'product_type_batch'    => $batch_id,
                    ];

                    $this->validate(new Request($arr), ProductType::$rules);

                    if(ProductType::find($key)){
                        ProductType::where('id', $key)->update($arr);
                    }
                    else{
                        ProductType::create($arr);
                    }
                }
            } else{
                // if new product no product type
                ProductType::create([
                    'product_id'            => $id,
                    'product_name'          => $request->get('product_name_en'),
                    'product_type_label'    => 'ORI',
                    'product_type_name'     => 'default',
                    'product_type_batch'    => $batch_id,
                ]);
            }

            // Remove product type if this update the type deleted.
            $old = ProductType::where('product_id', $id)->where('product_type_batch', '!=', $batch_id)->get();
            foreach ($old as $remove){
                ProductType::find($remove->id)->delete();
            }

            // check is update or create and create logs
            $log = !Product::find($id)['status']
                ? $this->adminLog('product_create', $request->all())
                : $this->adminLog('product_update', $request->all());

            $arr = [
                'status'            => intval($request->get('status')),
                'product_name'      => strtolower(str_replace(' ','-', $request->get('product_name_en'))),
                'product_name_en'   => $request->get('product_name_en'),
                'product_name_cn'   => $request->get('product_name_cn'),
                'product_variant_name_en'     => $request->get('product_variant_name_en'),
                'product_variant_name_cn'     => $request->get('product_variant_name_cn'),
                'product_short_desc_en'  => $request->get('product_short_desc_en'),
                'product_short_desc_cn'  => $request->get('product_short_desc_cn'),
                'product_desc_en'   => $request->get('product_desc_en'),
                'product_desc_cn'   => $request->get('product_desc_cn'),
                'price_0'           => $request->get('price_0'),
                'price_1'           => $request->get('price_1'),
//                'price_2'           => $request->get('price_2'),
//                'price_3'           => $request->get('price_3'),
//                'price_4'           => $request->get('price_4'),
            ];
            $this->validate(new Request($arr), Product::Rules($id));
            Product::where('id', $id)->update($arr);

            \DB::commit();

            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401, $request->all());
        }
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
            $path = 'products/';
            $storagePath = Storage::disk('public')->put($path, $request->upload);
            $storageName = basename($storagePath);
            $funcNum = $request->input('CKEditorFuncNum');
            // rename the file
            Storage::disk('public')->move($path.$storageName, $path.$imageName);

            $msg = 'Image successfully uploaded';
            $url = asset("storage/products/".$imageName);
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
        $path = 'products/';
        $storagePath = Storage::disk('public')->put($path, $request->file);
        $storageName = basename($storagePath);

        // rename the file
        Storage::disk('public')->move($path.$storageName, $path.$imageName);

        $images = Product::find($id)['product_images'] ?? [];
        array_push($images, $imageName);
        Product::where('id', $id)->update([
            'product_images' => $images
        ]);

//        $check = Transaction::whereNotNull('transaction_receipt', $bookingID)->value('payment_receipt');
//        if($check){
//            $image_path = public_path('img/receipt/' . $check);
//            File::delete($image_path);
//        }

        return $imageName;
    }

    public function deleteDropzoneImage(Request $request, $id){

        $path = 'products/';
        Storage::disk('public')->delete($path.$request->filename);

        $images = Product::find($id)['product_images'];
        if (($key = array_search($request->filename, $images)) !== false) {
            unset($images[$key]);
        }
        Product::where('id', $id)->update([
            'product_images' => $images
        ]);

//        asset("storage/products/".$item)

        return $this->success('', 'success');
    }
}


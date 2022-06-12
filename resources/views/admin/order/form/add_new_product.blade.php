<div class="row mt-2 mb-2" id="@if($item){{$item->id}}@else`+id+`@endif">
    <div class="col-8">
        @component('admin.components.form.select',[ 'name' => 'orders[`+id+`]', 'id' => 'prod_`+id+`',
            'label' => 'product', 'small' => '', 'smallID' => 'desc_`+id+`',
            'style' => 'mb-0', 'action' => 'onchange=countPrice(this)'
        ])
            @slot('customOption')
                @foreach(\App\Models\Product::getProductList() as $key => $product)
                    <optgroup label="{{$product->product_name_en}}">
                        @foreach($product->productType as $type)
                            <option value="{{$type->id}}">{{$product->product_name_en}} ({{$type->product_type_name}})</option>
                        @endforeach
                    </optgroup>
                @endforeach
            @endslot
        @endcomponent
    </div>
    <div class="col-2">
        @component('admin.components.form.text',[ 'style' => 'mb-1', 'name' => 'quantity[`+id+`]', 'id' => 'qty_`+id+`',
            'label' => 'quantity', 'type' => 'number', 'action' => 'onchange=countPrice(this)'
        ])
        @endcomponent
    </div>
    <div class="col-2">
        @if($item)
            @component('admin.components.form.delete_button',['id'=>$item->id]) @endcomponent
        @else
            @component('admin.components.form.delete_button') @endcomponent
        @endif
    </div>
</div>


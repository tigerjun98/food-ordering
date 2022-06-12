<div class="row mt-2 mb-2" id="@if($item){{$item->_id}}@else`+id+`@endif">
    <div class="col-8">
        @component('admin.components.form.select',[
            'label' => 'Product', 'style' => 'mb-0', 'action' => 'onchange=countPrice(this)'
        ])
            @slot('name')
                orders['@if($item){{$item->_id}}@else`+id+`@endif']
            @endslot

            @if($item)
                @slot('id')prod_{{$item->_id}}@endslot
                @slot('value'){{$item['product_type_id']}}@endslot
                @slot('smallID')desc_{{$item->_id}}@endslot
                @slot('small')RM {{$item->unit_price}} x {{$item->quantity}} = RM {{$item->order_price}}@endslot
            @else
                @slot('id')prod_`+id+`@endslot
                @slot('small') @endslot
                @slot('smallID')desc_`+id+`@endslot
            @endif

            @slot('customOption')
                @foreach(\App\Models\Product::getProductList() as $key => $product)
                    <optgroup label="{{$product->product_name_en}}">
                        @foreach($product->productType as $type)
                            <option value="{{$type->_id}}">{{$product->product_name_en}} ({{$type->product_type_name}})</option>
                        @endforeach
                    </optgroup>
                @endforeach
            @endslot
        @endcomponent
    </div>
    <div class="col-2">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'Quantity', 'type' => 'number', 'action' => 'onchange=countPrice(this)'
        ])
            @slot('name')
                quantity['@if($item){{$item->_id}}@else`+id+`@endif']
            @endslot

            @if($item)
                @slot('id')qty_{{$item->_id}}@endslot
                @slot('value'){{$item->quantity}}@endslot
            @else
                @slot('id')qty_`+id+`@endslot
            @endif
        @endcomponent
    </div>
    <div class="col-2">
        @if($item)
            @component('admin.components.form.delete_button',['id'=>$item->_id]) @endcomponent
        @else
            @component('admin.components.form.delete_button') @endcomponent
        @endif
    </div>
</div>


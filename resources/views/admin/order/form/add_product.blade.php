<div class="row mt-2 mb-2">
    <div class="col-7">
        @component('admin.components.form.text',[
            'label' => 'product', 'style' => 'mb-0', 'action' => 'onchange=countPrice(this)',
            'disabled' => true
        ])
            @slot('name')orders[{{$item->id}}]@endslot
            @slot('id')prod_{{$item->id}}@endslot
            @slot('value'){{$item->product_name}} ({{$item->product_type_name}})@endslot
            @slot('smallID')desc_{{$item->id}}@endslot
            @slot('small')RM {{$item->unit_price}} x {{$item->quantity}} = RM {{$item->order_price}}@endslot
        @endcomponent
    </div>
    <div class="col-3">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'unit_price', 'disabled' => true
        ])
            @slot('name')
                price[{{$item->id}}]
            @endslot
            @slot('id')price_{{$item->id}}@endslot
            @slot('value'){{$item->unit_price}}@endslot
        @endcomponent
    </div>
    <div class="col-2">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'quantity', 'type' => 'number', 'action' => 'onchange=countPrice(this)', 'disabled' => true
        ])
            @slot('name')quantity[{{$item->id}}]@endslot
            @slot('id')qty_{{$item->id}}@endslot
            @slot('value'){{$item->quantity}}@endslot
        @endcomponent
    </div>
</div>


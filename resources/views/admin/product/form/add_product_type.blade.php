<div class="row mt-2 mb-2" id="@if($item){{$item->id}}@else`+id+`@endif">
    <div class="col-2">
        @component('admin.components.form.text',[ 'style' => 'mb-1', 'small' => '2 letter only!',
            'label' => 'label',
        ])
            @slot('name')
                product_type_label[@if($item){{$item->id}}@else`+id+`@endif]
            @endslot

            @if($item)
                @slot('value'){{$item['product_type_label']}}@endslot
            @endif

        @endcomponent
    </div>
    <div class="col-8">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'variant_name',
        ])
            @slot('name')
                product_type[@if($item){{$item->id}}@else`+id+`@endif]
            @endslot

            @if($item)
                @slot('value'){{$item['product_type_name']}}@endslot
            @endif

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

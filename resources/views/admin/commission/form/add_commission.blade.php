<div class="row mt-2 mb-2" id="@if($item){{$key}}@else`+id+`@endif">
    <div class="col-2">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'min_sales', 'class' => 'min_sales', 'required' => false
        ])
            @slot('id')
                min-@if($item){{$key}}@else`+id+`@endif
            @endslot

            @slot('name')
                min[@if($item){{$key}}@else`+id+`@endif]
            @endslot

            @if($item)
                @slot('value'){{$item['min_sales']}}@endslot
            @endif
        @endcomponent
    </div>
    <div class="col-2">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'max_sales', 'class' => 'max_sales', 'onchange'=> 'maxChange', 'required' => false
        ])
            @slot('id')
                max-@if($item){{$key}}@else`+id+`@endif
            @endslot

            @slot('name')
                max[@if($item){{$key}}@else`+id+`@endif]
            @endslot

            @if($item)
                @slot('value'){{$item['max_sales']}}@endslot
            @endif

        @endcomponent
    </div>
    <div class="col-3">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'base_rate_in_percent',
        ])
            @slot('name')
                base[@if($item){{$key}}@else`+id+`@endif]
            @endslot

            @if($item)
                @slot('value'){{$item['base_rate']}}@endslot
            @endif

        @endcomponent
    </div>
    <div class="col-3">
        @component('admin.components.form.text',[ 'style' => 'mb-1',
            'label' => 'bonus_rate_in_percent',
        ])
            @slot('name')
                commission[@if($item){{$key}}@else`+id+`@endif]
            @endslot

            @if($item)
                @slot('value'){{$item['bonus']}}@endslot
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



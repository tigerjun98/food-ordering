<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->product_name_en]) @endcomponent

        @component('admin.components.datatable.row')
            @slot('data')
                @foreach($d->productType as $type)
                    {{$type->product_type_name}}@if(!$loop->last), @endif
                @endforeach
            @endslot
        @endcomponent

    @component('admin.components.datatable.row')
        @slot('data')
            <span class="pr-2 line-through">{{number_format($d->price_0, 2,'.',',')}}</span>
                <span>RM {{number_format($d->price_1, 2,'.',',')}}</span>
        @endslot
    @endcomponent
    @component('admin.components.datatable.row',[
        'data'  => $d->getStatusDescription(),
        'type'  =>'badge',
    ]) @endcomponent

    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                'link'      => route('admin.product.edit', $d->id),
                'type'      => 'edit',
            ]) @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.product.destroy', $d->id),
                'type'      => 'delete',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


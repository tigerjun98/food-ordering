<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->referral, 'class' => 'font-weight-bold ']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->total, 'type' => 'float']) @endcomponent
    @if(isset($option['commission']) && $option['commission'])
        @component('admin.components.datatable.row')
            @slot('data')
                @foreach($option['commission']->commissions as $key => $item)
                    @if($item->max_sales && $d->total >= $item->min_sales && $d->total <= $item->max_sales)
                            {{ __('common.currency') }} {{ number_format((( $d->total * ($item->base_rate/100)) + ($d->total * ($item->bonus/100))), 2)}}
                    @elseif(!$item->max_sales && $d->total >= $item->min_sales)
                            {{ __('common.currency') }} {{ number_format(( $d->total * ($item->base_rate/100)) + ($d->total * ($item->bonus/100)), 2)}}
                    @elseif($key == 0 && $d->total < $item->min_sales)
                            {{ __('common.currency') }} 0.00
                    @endif

{{--                    @if($item->max_sales && $d->total >= $item->min_sales && $d->total <= $item->max_sales)--}}
{{--                        {{ ($d->total * ($item->base_rate/100)) + ($d->total * ($item->bonus/100)) }}--}}
{{--                    @elseif(!$item->max_sales && $d->total >= $item->min_sales)--}}
{{--                        {{ ($d->total * ($item->base_rate/100)) + ($d->total * ($item->bonus/100)) }}--}}
{{--                    @endif--}}
                @endforeach
            @endslot
        @endcomponent
    @endif

    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                'type'      => 'button',
                'label'     => 'orders',
                'icon'      => 'data-center'
            ])
                @slot('link')
                        @if(isset($option['commission']) && $option['commission'])
                            {{route('admin.order.', 'commission='.$option["commission"]["id"].'&referral='.$d->referral)}}
                        @else
                            {{route('admin.order.', 'referral='.$d->referral)}}
                        @endif
                @endslot
            @endcomponent
        @endslot
    @endcomponent

</tr>


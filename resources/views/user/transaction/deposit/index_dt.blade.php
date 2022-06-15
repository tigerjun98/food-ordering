<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->created_at, 'type'=> 'datetime']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' =>  __('common.currency').' '.number_format($d->amount, 2,'.',',')]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->status]) @endcomponent

    @component('admin.components.datatable.action')
        @slot('list')
            @if($d->status == 0)
                @component('admin.components.datatable.row',[
                   'link'   => 'www.google.com',
                   'type'   => 'button',
                   'label'  => 'pay_now'
               ]) @endcomponent

{{--                @component('admin.components.datatable.row',[--}}
{{--                   'link'      => route('order.cancel', $d->id),--}}
{{--                   'type'      => 'delete',--}}
{{--                    'label'  => 'cancel_order'--}}
{{--               ]) @endcomponent--}}
            @endif

{{--                @component('admin.components.datatable.row',[--}}
{{--                      'link'       => route('order.edit', $d->id),--}}
{{--                      'type'       => 'edit',--}}
{{--                      'label'      => 'view_order'--}}
{{--                  ]) @endcomponent--}}

{{--                @if($d->status == 3 || $d->status == 4)--}}
{{--                    @component('admin.components.datatable.row',[--}}
{{--                               'type'      => 'button',--}}
{{--                               'icon'      => 'motorcycle',--}}
{{--                               'label'     => 'tracking',--}}
{{--                           ])--}}
{{--                        @slot('action')--}}
{{--                            linkTrack('{{$d->tracking_no}}')--}}
{{--                        @endslot--}}
{{--                    @endcomponent--}}
{{--                @endif--}}

{{--                @if($d->status == 4)--}}
{{--                    @component('admin.components.datatable.row',[--}}
{{--                       'type'      => 'button',--}}
{{--                       'label'  => 'order_received'--}}
{{--                    ])--}}
{{--                        @slot('action')--}}
{{--                            confirmModal('{{route('order.received', $d->id)}}')--}}
{{--                        @endslot--}}
{{--                    @endcomponent--}}
{{--                @endif--}}
{{--                @if($d->status == 5)--}}
{{--                    @component('admin.components.datatable.row',[--}}
{{--                      'link'   => route('order.review', $d->id),--}}
{{--                      'type'   => 'button',--}}
{{--                      'label'  => 'rating'--}}
{{--                    ]) @endcomponent--}}
{{--                @endif--}}

        @endslot
    @endcomponent
</tr>


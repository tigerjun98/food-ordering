<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->created_at, 'type'=> 'datetime']) @endcomponent
    @component('admin.components.datatable.row')
        @slot('data')
            <ul>
                @foreach($d->orders as $key => $item)
                    <li>{{$item->product_name}} ({{$item->product_type_name}}) x {{$item->quantity}}</li>
                @endforeach
            </ul>
        @endslot
    @endcomponent
    @component('admin.components.datatable.row',[ 'data' =>  __('common.currency').' '.number_format($d->total_price, 2,'.',',')]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->getStatusDescription() ?? '', 'type' => 'badge', 'badge' => \App\Models\OrderDetail::getBadgeList($d->status)]) @endcomponent

    @component('admin.components.datatable.action')
        @slot('list')
            @if($d->status == 0)
                @component('admin.components.datatable.row',[
                   'link'   => route('payment.', $d->id),
                   'type'   => 'button',
                   'label'  => 'pay_now'
               ]) @endcomponent

                @component('admin.components.datatable.row',[
                   'link'      => route('order.cancel', $d->id),
                   'type'      => 'delete',
                    'label'  => 'cancel_order'
               ]) @endcomponent
            @endif

                @component('admin.components.datatable.row',[
                      'link'       => route('order.edit', $d->id),
                      'type'       => 'edit',
                      'label'      => 'view_order'
                  ]) @endcomponent

                @if($d->status == 3 || $d->status == 4)
                    @component('admin.components.datatable.row',[
                               'type'      => 'button',
                               'icon'      => 'motorcycle',
                               'label'     => 'tracking',
                           ])
                        @slot('action')
                            linkTrack('{{$d->tracking_no}}')
                        @endslot
                    @endcomponent
                @endif

                @if($d->status == 4)
                    @component('admin.components.datatable.row',[
                       'type'      => 'button',
                       'label'  => 'order_received'
                    ])
                        @slot('action')
                            confirmModal('{{route('order.received', $d->id)}}')
                        @endslot
                    @endcomponent
                @endif
                @if($d->status == 5)
                    @component('admin.components.datatable.row',[
                      'link'   => route('order.review', $d->id),
                      'type'   => 'button',
                      'label'  => 'rating'
                    ]) @endcomponent
                @endif

        @endslot
    @endcomponent
</tr>


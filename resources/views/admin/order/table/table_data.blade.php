<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->id, 'class' => 'font-weight-bold ']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->getStatusDescription() ?? '', 'type' => 'badge', 'badge' => \App\Models\OrderDetail::getBadgeList($d->status)]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->full_name ?? '']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->phone]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->referral->name ?? '']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => __('common.currency').' '.number_format($d->total_price, 2,'.',',')]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->getLocationDescription()]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->created_at, 'type'=> 'datetime']) @endcomponent
    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                 'link'     => route('admin.order.view', $d->id),
                 'type'     => 'edit',
                 'label'    => 'view',
                 'icon'     => 'folder-open'
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

            @component('admin.components.datatable.row',[
                'link'      => route('admin.order.edit', $d->id),
                'type'      => 'edit',
            ]) @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.order.destroy', $d->id),
                'type'      => 'delete',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


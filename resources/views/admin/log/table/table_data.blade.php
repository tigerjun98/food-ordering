<tr class="text-muted cc">
    @component('admin.components.datatable.row',[ 'data' => $d->admin['name'] ?? '', 'class' => 'font-weight-bold ']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->getAdminLogDescription()]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->request]) @endcomponent

    @component('admin.components.datatable.row',[ 'type'=> 'datetime', 'data' => $d->created_at]) @endcomponent
{{--    @component('admin.components.datatable.action')--}}
{{--        @slot('list')--}}
{{--            @component('admin.components.datatable.row',[--}}
{{--                'link'      => route('admin.order.', 'referral='.$d->referral),--}}
{{--                'type'      => 'button',--}}
{{--                'label'     => 'Order details',--}}
{{--                'icon'      => 'data-center'--}}
{{--            ])--}}
{{--            @endcomponent--}}
{{--        @endslot--}}
{{--    @endcomponent--}}

</tr>


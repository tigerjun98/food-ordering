<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->getStatusDescription(), 'type' => 'badge']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->name]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->full_name]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->referral->name ?? '']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->referral_from ?? '']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->phone ?? '']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->email]) @endcomponent
    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                'link'      => route('admin.user.edit', $d->id),
                'type'      => 'edit',
            ]) @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.user.destroy', $d->id),
                'type'      => 'delete',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


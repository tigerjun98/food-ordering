<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->name_en ]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->start_at, 'type' => 'datetime']) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->end_at, 'type' => 'datetime']) @endcomponent


    @component('admin.components.datatable.action')
        @slot('list')

            @component('admin.components.datatable.row',[
                'link'      =>  route('admin.sales.', 'commission='.$d->id),
                'type'      => 'button',
                'label'     => 'participants',
                'icon'      => 'data-center'
            ])
            @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.commission.edit', $d->id),
                'type'      => 'edit',
            ]) @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.commission.destroy', $d->id),
                'type'      => 'delete',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


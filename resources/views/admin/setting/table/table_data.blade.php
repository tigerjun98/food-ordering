<tr class="text-muted cc">
    @component('admin.components.datatable.row',[ 'data' => __('common.'.$d->name)]) @endcomponent
    @component('admin.components.datatable.row',[ 'type' => 'datetime', 'data' => $d->updated_at]) @endcomponent

    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                'link'      => route('admin.setting.edit', $d->name),
                'type'      => 'edit',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->status_explain]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->user->full_name ]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->amount, 'type'=> 'float' ,'currency' => $d->token_explain]) @endcomponent
    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                'link'      => route('admin.transaction.deposit.edit', $d->id),
                'type'      => 'edit',
            ]) @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.transaction.deposit.destroy', $d->id),
                'type'      => 'delete',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


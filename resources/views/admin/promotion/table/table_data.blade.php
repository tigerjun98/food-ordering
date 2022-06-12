<tr class="text-muted">
    @component('admin.components.datatable.row',[ 'data' => $d->id]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->getStatusDescription() ?? '', 'type' => 'badge', 'badge' => \App\Models\Promotion::getBadgeList($d->status)]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => date("Y/m/d h:i A", strtotime($d->start_at))]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => date("Y/m/d h:i A", strtotime($d->end_at))]) @endcomponent
    @component('admin.components.datatable.row',[ 'small'=> '', 'data' => $d->{'label_'.App::getLocale() } ]) @endcomponent
    @component('admin.components.datatable.row',[ 'data' => $d->{'title_'.App::getLocale() } ]) @endcomponent
    @component('admin.components.datatable.row',[ 'type'=> 'url', 'data' => $d->url, 'style' => 'max-width: 150px; white-space: inherit;']) @endcomponent

    @component('admin.components.datatable.action')
        @slot('list')
            @component('admin.components.datatable.row',[
                'link'      => route('admin.promotion.edit', $d->id),
                'type'      => 'edit',
            ]) @endcomponent

            @component('admin.components.datatable.row',[
                'link'      => route('admin.promotion.destroy', $d->id),
                'type'      => 'delete',
            ]) @endcomponent
        @endslot
    @endcomponent
</tr>


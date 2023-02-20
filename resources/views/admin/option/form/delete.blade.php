<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('admin.medicine.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete <span class="font-weight-bold">{{ $data->name_cn }}</span>?
                This process cannot be undo.</h6>
        @else
            <h6><span class="font-weight-bold">{{ $data->name_cn }}</span> in used. This action is prohibited!</h6>
        @endif
    @endslot
</x-admin.component.modal>

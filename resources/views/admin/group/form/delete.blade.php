<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('admin.group.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete <span class="font-weight-bold">{{ $data->full_name }}</span>?
                This process cannot be undo.</h6>
        @else
            <h6>The attempted operation is prohibited because <span class="font-weight-bold font-italic text-danger">{{ $data->full_name }}</span> in used.</h6>
        @endif
    @endslot
</x-admin.component.modal>

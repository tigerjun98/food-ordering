<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('admin.user.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete <span class="font-weight-bold">{{ $data->full_name }}</span>?
                This process cannot be undo.</h6>
        @else
            <h6>The attempted operation is <span class="font-italic text-danger">prohibited</span> because <span class="font-weight-bold font-italic">{{ $data->full_name }}</span> in used for
                <span class="font-weight-bold font-italic text-info">consultation</span>.
            </h6>
        @endif
    @endslot
</x-admin.component.modal>

<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('merchant.menu-item.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete <span class="font-weight-bold">{{ $data->name }}</span>?
                This process cannot be undo.</h6>
        @else
            <h6>
                The attempted operation is
                <span class="font-italic text-danger">prohibited</span> because
                <span class="font-weight-bold font-italic">{{ $data->name }}</span>
                in used.
            </h6>
        @endif
    @endslot
</x-admin.component.modal>

<x-admin.component.modal
    :delete="true"
    :title="'Delete Confirmation'"
    :submit="route('admin.role.destroy', $data->id)"
>
    @slot('body')
        <h6>Do you really want to delete <span class="font-weight-bold">{{ $data->full_name }}</span>?
            This process cannot be undo.</h6>
    @endslot
</x-admin.component.modal>

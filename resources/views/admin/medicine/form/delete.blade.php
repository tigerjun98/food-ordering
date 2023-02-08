<x-admin.component.modal
    :delete="true"
    :title="'Delete Confirmation'"
    :submit="route('admin.medicine.destroy', $data->id)"
>
    @slot('body')
        <h6>Do you really want to delete <span class="font-weight-bold">{{ $data->name_cn }}</span>?
            This process cannot be undone.</h6>
    @endslot
</x-admin.component.modal>

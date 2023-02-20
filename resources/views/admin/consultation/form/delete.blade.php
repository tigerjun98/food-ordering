<x-admin.component.modal
    :delete="true"
    :title="'Delete Confirmation'"
    :submit="route('admin.consultation.destroy', $data->id)"
>
    @slot('body')
        <h6>Do you really want to delete Consultation <span class="font-weight-bold">Ref Id: {{ $data->id }}</span>?
            This process cannot be undo.</h6>
    @endslot
</x-admin.component.modal>

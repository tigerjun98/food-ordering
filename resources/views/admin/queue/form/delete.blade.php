<x-admin.component.modal
    :delete="true"
    :title="'Delete Confirmation'"
    :submit="route('admin.queue.destroy', $data->id)"
>
    @slot('body')
        <h6>Do you really want to remove <span class="font-weight-bold">{{ $data->patient->full_name }}</span> in the queue?
            This process cannot be undo.</h6>
    @endslot

    @slot('script')
        $('#queueBox-{{$data->id}}').remove()
    @endslot
</x-admin.component.modal>

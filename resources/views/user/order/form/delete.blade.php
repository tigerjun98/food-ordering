<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('order.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete the order?
                This process cannot be undo.</h6>
        @else
            <h6>
                The attempted operation is
                <span class="font-italic text-danger">prohibited</span> because order is under processing.
            </h6>
        @endif
    @endslot
</x-admin.component.modal>

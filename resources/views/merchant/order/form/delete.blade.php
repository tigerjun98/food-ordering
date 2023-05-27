<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('merchant.order.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete this order?
                This process cannot be undo.</h6>
        @else
            <h6>
                The attempted operation is
                <span class="font-italic text-danger">prohibited</span>.
            </h6>
        @endif
    @endslot
</x-admin.component.modal>

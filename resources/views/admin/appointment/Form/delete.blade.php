<x-admin.component.modal
    :delete="$canDelete"
    :title="'Delete Confirmation'"
    :submit="route('admin.appointment.destroy', $data->id)"
>
    @slot('body')
        @if($canDelete)
            <h6>Do you really want to delete appointment <span class="font-weight-bold">{{ $data->patient->full_name }}</span>
                on <span class="font-weight-bold">{{ dateFormat($data->datetime, 'r') }}</span>
                with <span class="font-weight-bold">{{ $data->doctor->full_name }}</span>? This process cannot be undo.</h6>
        @else
            <h6>The attempted operation is prohibited because this appointment status already
                <span class="font-weight-bold font-italic text-danger">{{ $data->status_explain }}</span>.
            </h6>
        @endif
    @endslot
</x-admin.component.modal>

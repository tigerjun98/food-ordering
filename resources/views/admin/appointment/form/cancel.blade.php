<x-admin.component.modal
    :delete="$canDelete"
    :title="'Cancel Confirmation'"
    :submit="route('admin.appointment.drop', $data->id)"
    :submitBtnLang="'cancel_appointment'"
>
    @slot('body')
        <h6>Do you really want to cancel appointment <span class="font-weight-bold">{{ $data->patient->full_name }}</span>
            on <span class="font-weight-bold">{{ dateFormat($data->appointment_date, 'r') }}</span>
            with <span class="font-weight-bold">{{ $data->doctor->full_name }}</span>? This process cannot be undo.
        </h6>
    @endslot

    @slot('script')
        let appointmentId = {{ $data->id }}
        let list = $(`#appointmentList-${ appointmentId }`)
        if (list.length) {
            list.hide('slow', function(){ list.remove(); })
            getTotalTodayAppointment()
        }
    @endslot
</x-admin.component.modal>

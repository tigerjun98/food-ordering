<x-admin.component.modal
    :title="'Appointment details'"
    :navs="['details']"
    :submit="route('admin.queue.store')"
    :modalBodyClass="'fixed-height'"
    :submitBtnLang="'queue'"
>
    @slot('details')
        <input type="hidden" name="id" value="{{ new_id() }}" />
        <input type="hidden" name="user_id" value="{{ $data->patient->id }}" />
        <input type="hidden" name="doctor_id" value="{{ $data->doctor->id }}" />
        <input type="hidden" name="remark" value="{{ $data->remark }}" />
        <input type="hidden" name="prioritise" value="{{ true }}" />
        <input type="hidden" name="appointment_id" value="{{ $data->id }}" />

        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :name="'full_name'"
                :value="$data->patient->full_name_with_group"
            />
        </div>

        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :name="'nric'"
                :value="$data->patient->nric"
            />
        </div>

        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :name="'appointment_date'"
                :value="$data->dateFormat('appointment_date', 'r')"
            />
        </div>

        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :name="'doctor_id'"
                :value="$data->doctor->full_name"
            />
        </div>

        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :name="'remark'"
                :value="$data->remark"
            />
        </div>
    @endslot

    @slot('script')
        let list = $(`#appointmentList-${ res.data.appointment_id }`)
        if (list.length) {
            list.hide('slow', function(){ list.remove(); })
        }
    @endslot
</x-admin.component.modal>
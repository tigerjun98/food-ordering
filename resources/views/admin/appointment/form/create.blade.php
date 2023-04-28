<x-admin.component.modal
    :title="'Appointment details'"
    :navs="['details']"
    :submit="route('admin.appointment.store')"
>
    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />
        <input type="hidden" name="process" value="{{ $data ? 'update' : 'create' }}" />

        @php
            $patient = $data ? $data->patient : ($patient ?? null)
        @endphp

        <input type="hidden" name="user_id" id="user_id" value="{{ request()->user_id ?? ($patient ? $patient->id : null) }}" />
        <input type="hidden" name="status" id="status" value="{{ request()->status ?? ($data ? $data->status : \App\Models\Appointment::PENDING) }}" />

        @if(!$patient)
            <div class="hide-box" id="patientSearch">
                <div class="row">
                    <x-admin.page.queue.patient-search :moduleName="'appointment'" />
                </div>
            </div>
        @endif

        <div class="hide-box" id="patientQueueInfo">

            <div class="row">
                <x-admin.form.text
                    :col="'md-6'"
                    :label="trans('label.nric_or_passport')"
                    :name="'nric'"
                    :value="$patient->nric ?? null"
                    :disabled="true"
                />

                <x-admin.form.text
                    :col="'md-6'"
                    :label="trans('label.full_name')"
                    :name="'full_name'"
                    :value="$patient->full_name_with_group ?? null"
                    :disabled="true"
                />
            </div>

            <div class="row">
                <x-admin.form.datetime
                    :col="'md-6'"
                    :label="trans('label.appointment_date')"
                    :name="'appointment_date'"
                    :value="$data->appointment_date ?? ''"
                />

                <x-admin.form.select
                    :col="'md-6'"
                    :name="'doctor_id'"
                    :selectJs="false"
                    :ajax="route('admin.get-doctor-opt')"
                >
                    @if($data && $data->doctor_id)
                        @slot('customOption')
                            <option value="{{ $data->doctor_id }}" selected="selected">{{ $data->doctor->full_name }}</option>
                        @endslot
                    @endif
                </x-admin.form.select>
            </div>

            <x-admin.form.textarea
                :data="$data"
                :rows="6"
                :name="'remark'"
                :required="false"
            />
        </div>

        @include('admin.queue.js.create')
    @endslot

    @slot('script')
        let dateTime = $(`#apptDateTime-${ res.data.id }`)
        let converted = moment(res.data.appointment_date).format('DD MMM, YYYY HH:mm A')
        dateTime.text(converted)

        let remark = $(`#apptRemark-${ res.data.id }`)
        if (res.data.remark === null) {
            remark.removeClass('mt-3')
        } else {
            remark.addClass('mt-3')
        }
        remark.text(res.data.remark)

        getTotalTodayAppointment()
    @endslot
</x-admin.component.modal>
<x-admin.component.modal
    :title="'Appointment details'"
    :nav="['details']"
    :submit="route('admin.appointment.store')"
>
    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

        @php
            $patient = $data ? $data->patient : ($patient ?? null)
        @endphp

        <input type="hidden" name="user_id" id="user_id" value="{{ request()->user_id ?? ($patient ? $patient->id : null) }}" />

        @if(!$patient)
            <div class="hide-box" id="patientSearch">
                <div class="row">
                    <x-admin.page.queue.patient-search />
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
                    :label="trans('label.datetime')"
                    :name="'datetime'"
                    :value="$data->datetime ?? ''"
                />

                <x-admin.form.select
                    :col="'md-6'"
                    :name="'admin_id'"
                    :selectJs="false"
                    :ajax="route('admin.get-doctor-opt')"
                >
                    @if($data && $data->admin_id)
                        @slot('customOption')
                            <option value="{{ $data->admin_id }}" selected="selected">{{ $data->doctor->full_name }}</option>
                        @endslot
                    @endif
                </x-admin.form.select>
            </div>

            @if (!blank($data))
                <div class="row">
                    <x-admin.form.select
                        :col="'md-12'"
                        :data="$data"
                        :options="\App\Models\Appointment::getStatusList()"
                        :name="'status'"
                    />
                </div>
            @else
                <input type="hidden" name="status" value="{{\App\Models\Appointment::PENDING}}" />
            @endif

            <x-admin.form.textarea
                :data="$data"
                :rows="6"
                :name="'remark'"
                :required="false"
            />
        </div>

        @include('admin.queue.js.create')
    @endslot
</x-admin.component.modal>

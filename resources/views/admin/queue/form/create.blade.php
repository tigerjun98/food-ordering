<x-admin.component.modal
    :title="'Queue details'"
    :nav="['details', 'settings']"
    :submit="route('admin.queue.store')"
>
    @slot('settings')

        @if($data)
            <div class="row">
                <x-admin.form.select
                    :col="'md-12'"
                    :name="'status'"
                    :data="$data"
                    :options="\App\Models\Queue::getStatusList()"
                />
            </div>

            @slot('script')
                $('#queueBox-{{ $data->id }}').setHtml({ url: '{{ route('admin.queue.edit-box', $data->id) }}' })
            @endslot
        @endif

        <div class="row">
            <x-admin.form.select
                :options="\App\Models\Queue::getTypeList()"
                :col="'md-12'"
                :name="'type'"
                :value="$data->type ?? \App\Models\Queue::CONSULTATION"
            />
        </div>

    @endslot

    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

        @php
            $patient = $data ? $data->patient : ($patient ?? null)
        @endphp

        <input type="hidden" name="user_id" id="user_id" value="{{ request()->user_id ?? ($patient ? $patient->id : null) }}" />

        <div class="hide-box" id="patientSearch">
            <x-admin.component.module.queue.user-search />
            <x-admin.component.button
                :text="trans('button.create')"
                :class="'patient-not-exists hide btn-primary'"
                :onclick="'createNewPatient()'"
            />
        </div>

        <div class="hide-box" id="patientQueueInfo">
            <x-admin.form.text
                :label="trans('label.nric_or_passport')"
                :name="'nric'"
                :value="$patient->nric ?? null"
                :disabled="true"
            />

            <x-admin.form.text
                :label="trans('label.full_name')"
                :name="'full_name'"
                :value="$patient->full_name ?? null"
                :disabled="true"
            />


            <div class="row">
                <x-admin.form.select
                    :multiple="true"
                    :col="'md-12'"
                    :name="'doctor_id'"
                    :ajax="route('admin.get-doctor-opt')"
                    :required="false"
                >
                    @if($data && $data->doctor)
                        @slot('customOption')
                            <option value="{{ $data->doctor_id }}" selected="selected"> {{ $data->doctor->full_name }}</option>
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

            <div class="mb-4">
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input"
                           value="1"
                           name="prioritise"
                           id="customCheckThis">
                    <label class="custom-control-label" for="customCheckThis">Check this to prioritise the patient</label>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function patientExists() {
                if( $('#user_id').val() ){
                    return true;
                }
                return false;
            }

            function hideRelatedBox(){
                const refs = document.getElementsByClassName(`hide-box`);
                Array.prototype.forEach.call(refs, function (el) { // loop classes
                    $(el).hide();
                });
            }

            function handleQueueInfo() {
                hideRelatedBox()
                if( patientExists() ){
                    $('#patientQueueInfo').show().slideDown();
                } else{
                    $('#patientSearch').show().slideDown();
                }
            }

            handleQueueInfo()
        </script>
    @endslot
</x-admin.component.modal>

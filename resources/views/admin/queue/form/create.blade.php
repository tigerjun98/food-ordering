@php
    use App\Models\Queue;
@endphp

<x-admin.component.modal
    :title="'Queue details'"
    :submit="route('admin.queue.store')"
    :navs="['details', 'settings']"
>
    @slot('settings')

        <input type="hidden"
               id="type"
               name="type"
               value="{{ $data->type ?? Queue::CONSULTATION }}"
        >

        @if( !auth()->user()->can( 'queue.index' ) )
            <x-admin.component.status-bar
                :type="'warning'"
                :message="trans('messages.permission_required', ['name' => trans('permission.queue.index')])"/>
        @endif

        <div class="@if( !auth()->user()->can( 'queue.index' ) ) hide @endif">
            <div class="row">
                <x-admin.form.select
                    :options="App\Models\Queue::getRoleList()"
                    :col="'md-12'"
                    :name="'role'"
                    :value="$data->role ?? \App\Models\Queue::RECEPTIONIST"
                />
            </div>

            @if($data)
                <div class="row">
                    <x-admin.form.select
                        :col="'md-12'"
                        :name="'status'"
                    />
                </div>

                {{-- when form submit success, refresh the box info--}}
                @slot('script')
                    $('#queueBox-{{ $data->id }}').setHtml({ url: '{{ route('admin.queue.edit-box', $data->id) }}' })
                @endslot
            @endif
        </div>
    @endslot

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
            <x-admin.form.text
                :label="trans('label.nric_or_passport')"
                :name="'nric'"
                :value="$patient->nric ?? null"
                :disabled="true"
            />

            <x-admin.form.text
                :label="trans('label.full_name')"
                :name="'full_name'"
                :value="$patient->full_name_with_group ?? null"
                :disabled="true"
            />

            <div class="row">
                <x-admin.form.select
                    :col="'md-12'"
                    :name="'doctor_id'"
                    :selectJs="false"
                    :ajax="route('admin.get-doctor-opt', \App\Entity\Enums\StatusEnum::ACTIVE)"
                >
                    @if($data && $data->doctor)
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

            <div class="mb-4">
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input"
                           value="1"
                           name="prioritise"
                           id="customCheckThis">
                    <label class="custom-control-label" for="customCheckThis">{{ trans('messages.checked_to_prioritise_the_patient') }}</label>
                </div>
            </div>
        </div>

        @include('admin.queue.js.create')
    @endslot

</x-admin.component.modal>

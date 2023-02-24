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
        <input type="hidden" name="user_id" value="{{ $data ? $data->user_id : $patient->id }}" />

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





    @endslot
</x-admin.component.modal>

<x-admin.component.modal
    :title="'Queue details'"
    :nav="['details']"
    :submit="route('admin.queue.store')"
>
    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />
        <input type="hidden" name="user_id" value="{{ $data ? $data->user_id : $patient->id }}" />

        <div class="row">
            <x-admin.form.select
                :col="'md-12'"
                :name="'doctor_id'"
                :ajax="route('admin.get-doctor-opt')"
            >
                @if($data)
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

    @endslot
</x-admin.component.modal>

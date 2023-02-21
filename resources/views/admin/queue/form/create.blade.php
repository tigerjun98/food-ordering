<x-admin.component.modal
    :title="'Queue details'"
    :nav="['details']"
    :submit="route('admin.queue.store')"
>
    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />
        <input type="hidden" name="user_id" value="{{ $patient->id }}" />

        <div class="row">
            <x-admin.form.select
                :col="'md-12'"
                :name="'doctor_id'"
                :ajax="route('admin.get-doctor-opt')"
            />
        </div>

        <x-admin.form.textarea
            :data="$data"
            :rows="6"
            :name="'remark'"
            :required="false"
        />
    @endslot
</x-admin.component.modal>

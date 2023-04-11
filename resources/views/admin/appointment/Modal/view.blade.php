<x-admin.component.modal
    :title="'Appointment details'"
    :navs="['details']"
    :submit="route('admin.queue.store')"
    :modalBodyClass="'fixed-height'"
    :submitBtnLang="'queue'"
>
    @slot('details')
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
                :name="'datetime'"
                :value="$data->dateFormat('datetime', 'r')"
            />
        </div>

        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :name="'admin_id'"
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

</x-admin.component.modal>

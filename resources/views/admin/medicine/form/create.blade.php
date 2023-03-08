<x-admin.component.modal
    :title="'Medicine details'"
    :nav="['details', 'description']"
    :submit="route('admin.medicine.store')"
>

    @slot('description')
        <x-admin.form.textarea
            :data="$data"
            :rows="6"
            :name="'description_cn'"
            :required="false"
        />

        <x-admin.form.textarea
            :data="$data"
            :rows="6"
            :name="'description_en'"
            :required="false"
        />
    @endslot

    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :options="\App\Models\Medicine::getTypeList()"
                :col="'md-12'"
                :name="'type'"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_cn'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_en'"
                :required="false"
                :remark="'Leave blank to convert to Pinyin'"
            />
        </div>

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :options="\App\Models\Medicine::getStatusList()"
                :col="'md-12'"
                :name="'status'"
            />
        </div>

    @endslot
</x-admin.component.modal>

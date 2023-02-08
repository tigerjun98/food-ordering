<x-admin.component.modal
    :title="'Admin details'"
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


{{--        <div class="row">--}}
{{--            <x-admin.form.select--}}
{{--                :data="$data"--}}
{{--                :col="'md-6'"--}}
{{--                :name="'gender'"--}}
{{--                :options="\App\Models\Admin::getGenderList()"--}}
{{--            />--}}
{{--        </div>--}}

    @endslot
</x-admin.component.modal>

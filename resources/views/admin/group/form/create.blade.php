<x-admin.component.modal
    :title="'Group details'"
    :navs="['details']"
    :submit="route('admin.group.store')"
>
    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_en'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_cn'"
                :required="false"
            />
        </div>

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :options="\App\Models\Group::getTypeList()"
                :col="'md-6'"
                :name="'type'"
            />
            <x-admin.form.select
                :data="$data"
                :options="\App\Models\Group::getStatusList()"
                :col="'md-6'"
                :name="'status'"
            />
        </div>

        <x-admin.form.textarea
            :data="$data"
            :name="'remark'"
            :required="false"
        />

    @endslot
</x-admin.component.modal>

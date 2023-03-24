<x-admin.component.modal
    :title="'Fee details'"
    :nav="['details']"
    :submit="route('admin.fee.store')"
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
                :options="\App\Models\Fee::getCategoryList()"
                :col="'md-12'"
                :name="'category'"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'type'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'price'"
            />
        </div>

        <x-admin.form.textarea
            :data="$data"
            :name="'remark'"
            :required="false"
        />

        <div class="row">
            <x-admin.form.select
                :options="\App\Models\Fee::getStatusList()"
                :col="'md-12'"
                :name="'status'"
                :value="$data->status ?? \App\Entity\Enums\StatusEnum::ACTIVE"
            />
        </div>
    @endslot
</x-admin.component.modal>

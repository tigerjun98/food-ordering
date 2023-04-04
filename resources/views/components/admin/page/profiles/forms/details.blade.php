<x-admin.page.profiles.forms.index
    :route="route('admin.profile.store')"
    :title="trans('common.profile_details')"
    :desc="'Last edited '.dateFormat($data->updated_at, 'r')"
>
    @slot('body')
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
            <x-admin.form.text
                :data="$data"
                :type="'phone'"
                :col="'md-6'"
                :name="'phone'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'email'"
            />
        </div>

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :col="'md-6'"
                :name="'gender'"
                :options="\App\Entity\Enums\GenderEnum::getListing()"
            />
            <x-admin.form.select
                :data="$data"
                :col="'md-6'"
                :name="'status'"
                :options="\App\Entity\Enums\StatusEnum::getListing()"
                :required="false"
            />
        </div>
    @endslot
</x-admin.page.profiles.forms.index>

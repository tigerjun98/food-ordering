<x-admin.page.profiles.forms.index
    :route="route('profile.store')"
    :title="'Profile details'"
    :desc="'Last edited '.dateFormat($data->updated_at, 'r')"
>
    @slot('body')
        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'first_name'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'last_name'"
                :required="false"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'contact'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'email'"
            />
        </div>
    @endslot
</x-admin.page.profiles.forms.index>

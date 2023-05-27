<x-admin.component.modal
    :title="'Users details'"
    :navs="['details', 'security']"
    :submit="route('admin.user.store')"
>

    @slot('security')
        <div class="row">
            <x-admin.form.text
                :col="'md-6'"
                :type="'password'"
                :name="'password'"
                :required="false"
            />
            <x-admin.form.text
                :col="'md-6'"
                :type="'password'"
                :name="'password_confirmation'"
                :required="false"
            />
        </div>
    @endslot

    @slot('details')

        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

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
                :col="'md-12'"
                :name="'contact'"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-12'"
                :name="'email'"
            />
        </div>
    @endslot

</x-admin.component.modal>

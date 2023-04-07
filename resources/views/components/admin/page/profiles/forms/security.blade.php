<x-admin.page.profiles.forms.index
    :route="route('admin.profile.store-password')"
    :title="trans('common.security')"
    :desc="'Last edited '.dateFormat($data->updated_at, 'r')"
>
    @slot('body')
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

    @slot('script')
        $('input#password').val('')
        $('input#password_confirmation').val('')
    @endslot
</x-admin.page.profiles.forms.index>

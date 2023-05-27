<x-admin.page.profiles.forms.index
    :route="route('profile.store-password')"
    :title="'Security'"
    :desc="'Last edited '.dateFormat($data->updated_at, 'r')"
>
    @slot('body')

        <input type="hidden" name="id" value="{{ auth()->id() }}" />
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

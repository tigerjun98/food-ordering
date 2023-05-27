@extends('admin.layout')

@section('content')
    <div class="col-12">
        <x-admin.layout.pages.index
            :navs="['profile', 'account', 'security']"
            :title="'Profile management'"
        >
            @slot('profile')
                <div class="card">
                    <div class="card-body">
                        <x-merchant.pages.profile.form.profile
                            :data="$data"
                            :categories="$categories"
                        />
                    </div>
                </div>
            @endslot

            @slot('account')
                <div class="card">
                    <div class="card-body">
                        <x-admin.page.profiles.forms.details :data="$data"/>
                    </div>
                </div>
            @endslot

            @slot('security')
                <div class="card">
                    <div class="card-body">
                        <x-admin.page.profiles.forms.index
                            :route="route('merchant.profile.store-password')"
                            :title="'Security'"
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

                    </div>
                </div>
            @endslot
        </x-admin.layout.pages.index>
    </div>
@endsection

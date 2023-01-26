@extends('user.layout')

@section('content')

    @component('user.components.layouts.header', ['title' => 'register'])@endcomponent

    @component('user.components.form.card', ['title' => __('common.signup_to').' '.env('APP_NAME')])

        @slot('desc')
            <p>{{ __('common.already_have_an_account') }}</p>
            <a href="{{route('login')}}" class="text-p text-color-3 fw-6">{{ __('common.login') }}</a>
        @endslot

        @slot('body')
            @component('user.components.form.index', ['route' => route('submitRegister')])
                @slot('body')
                    <div class="form-login flat-form flex-one">
                        <div class="info-login cc">
                            @component('user.components.form.text',[
                                      'name' => 'referral',
                                  ]) @endcomponent

                            @component('user.components.form.text',[
                                       'name' => 'first_name',
                                   ]) @endcomponent

                            @component('user.components.form.text',[
                                      'name' => 'last_name',
                                  ]) @endcomponent

                            @component('user.components.form.text',[
                                      'name' => 'email', 'type' => 'email'
                                  ]) @endcomponent

                            @component('user.components.form.text',[
                                   'name' => 'password', 'type' => 'password'
                               ]) @endcomponent

                            @component('user.components.form.text',[
                                 'name' => 'password_confirmation', 'type' => 'password'
                             ]) @endcomponent

                            <button class="submit button-login mt-5 cc">
                                <div class="btn-logo">
                                    <span class="icon" style="background: url('{{ asset('images/icons/auth/register.svg') }}')"></span>
                                    <span class="font">{{ __('common.sign_up') }}</span>
                                </div>
                            </button>
                        </div>
                        <div class="box-button">
                            <div class="button-social">
                                <a href="{{route('login')}}" class="sc-button">
                                    <div class="btn-logo">
                                        <span class="icon" style="top: -1px; background: url('{{ asset('images/icons/auth/login.svg') }}')"></span>
                                        <span class="font">{{ __('common.sign_in') }}</span>
                                    </div>
                                </a>
{{--                                <a href="#" class="sc-button style-2"><i class="fab fa-google-plus-g"></i><span class="font">Continue With Facebook</span></a>--}}
{{--                                <a href="#" class="sc-button style-4"><i class="fab fa-instagram"></i><span class="font">Continue With Facebook</span></a>--}}
                            </div>
                        </div>
                    </div>

                    <script>
                        window.location.search.substr(1)
                        function findGetParameter(parameterName) {
                            var result = null,
                                tmp = [];
                            location.search
                                .substr(1)
                                .split("&")
                                .forEach(function (item) {
                                    tmp = item.split("=");
                                    if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                                });
                            return result ?? 'origin';
                        }
                        $('#referral').val(findGetParameter('referral'))
                    </script>
                @endslot
            @endcomponent
        @endslot
    @endcomponent
@endsection

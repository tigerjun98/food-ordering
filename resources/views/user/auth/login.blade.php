@extends('user.layout')

@section('content')

    @component('user.components.layouts.header', ['title' => 'login'])@endcomponent

    @component('user.components.form.card', ['title' => __('common.signin_to').' '.env('APP_NAME')])

        @slot('desc')
            <p>{{ __('common.already_signed_up') }} </p>
            <a href="{{route('register')}}" class="text-p text-color-3 fw-6">{{ __('common.register') }}</a>
        @endslot

        @slot('body')
            @component('user.components.form.index', ['route' => route('submitLogin'), 'id' => true])
                @slot('body')
                    <div class="form-login flat-form flex-one">
                        <div class="info-login">

                            @component('user.components.form.text',[
                                  'name' => 'name', 'label' => 'email_or_username'
                              ]) @endcomponent

                            @component('user.components.form.text',[
                                 'name' => 'password', 'type' => 'password',
                             ]) @endcomponent

                            <div class="row-form style-1 flex-two">
                                <label class="flex align">
                                    {{--                                                <input type="checkbox">--}}
                                    {{--                                                <span class="btn-checkbox flex-two"></span>--}}
                                    {{--                                                <span class="text-p text-color-7">Remember Me</span>--}}
                                </label>
                                <a href="{{route('forgetPassword')}}" class="forgot-pass text-p cc">{{ __('common.forgot_password') }}</a>
                            </div>
                            <button class="submit button-login cc" type="submit">
                                <div class="btn-logo">
                                    <span class="icon" style="background: url('{{ asset('images/icons/auth/login.svg') }}')"></span>
                                    <span class="font">{{ __('common.sign_in') }}</span>
                                </div>
                            </button>
                        </div>

                        <div class="box-button">
                            <div class="button-social">
                                <a href="{{route('register')}}" class="sc-button">
                                    <div class="btn-logo">
                                        <span class="icon" style="top: -1px; background: url('{{ asset('images/icons/auth/register.svg') }}')"></span>
                                        <span class="font">{{ __('common.sign_up') }}</span>
                                    </div>
                                </a>
{{--                                <a href="#" class="sc-button style-2"><i class="fab fa-google-plus-g"></i><span class="font">Continue With Facebook</span></a>--}}
{{--                                <a href="#" class="sc-button style-4"><i class="fab fa-instagram"></i><span class="font">Continue With Facebook</span></a>--}}
                            </div>
                        </div>
                    </div>
                    <style>
                        .flat-auctions-details .post .button-social .sc-button span {
                            font-size: 16px;
                        }
                        .flat-login .wrap-login .box-login .box-button .sc-button {
                            height: 57px;
                            margin-right: 0;
                            margin-bottom: 20px;
                            padding: 21px 0;
                            text-align: center;
                            width: 100%;
                            font-size: 14px;
                        }
                        .flat-login .wrap-login .box-login .box-button {
                            padding-left: 60px;
                        }
                        @media (max-width: 768px){
                            .flat-login .wrap-login .box-login .box-button {
                                padding-left: 60px;
                            }
                        }
                    </style>
                @endslot
            @endcomponent
        @endslot
    @endcomponent

@endsection

@extends('user.layout')

@section('content')

    @component('user.components.layouts.header', ['title' => 'register'])@endcomponent

    <div class="tf-section flat-login flat-auctions-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap-login">
                        <div class="box-login post">
                            <img class="absolute mark-page3" src="{{ asset('assets/user/images/mark/mark-header-02.png') }}" alt="">
                            <img class="absolute mark-login1" src="{{ asset('assets/user/images/mark/mark-login-1.png') }}" alt="">
                            <img class="absolute mark-login2 animate-rotate" src="{{ asset('assets/user/images/mark/mark-login-2.png') }}" alt="">
                            <img class="absolute mark-login3" src="{{ asset('assets/user/images/mark/mark-login-3.png') }}" alt="">
{{--                            <img class="absolute mark-login" src="{{ asset('assets/user/images/backgroup-secsion/bg-login.png') }}" alt="">--}}
                            <div class="heading-login">
                                <h2 class="fw-5 cc">{{ __('common.signup_to') }} {{ env('APP_NAME') }}</h2>
                                <div class="flex"><p>{{ __('common.already_have_an_account') }}</p>
                                    <a href="{{route('login')}}" class="text-p text-color-3 fw-6">{{ __('common.login') }}</a></div>
                            </div>
                            <!-- <form action="#" class="form-profile">  -->
                            <form id="SubmitForm">
                                <div class="form-login flat-form flex-one">
                                    <div class="info-login cc">
                                        <fieldset>
                                            <p class="title-infor-account">{{ __('common.first_name') }}</p>
                                            <input type="text" id="first_name" class="tb-my-input" name="first_name" placeholder="{{ __('common.enter_your_name') }}" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset>
                                            <p class="title-infor-account">{{ __('common.last_name') }}</p>
                                            <input type="text" id="last_name" class="tb-my-input" name="last_name" placeholder="{{ __('common.enter_your_name') }}" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset>
                                            <p class="title-infor-account">{{ __('common.email') }}</p>
                                            <input type="email" id="email" class="tb-my-input" name="email" placeholder="info@gmail.com" value="" aria-required="true"  required="">
                                        </fieldset>
                                        <fieldset class="style-pass">
                                            <p class="title-infor-account">{{ __('common.password') }}</p>
                                            <input type="password" name="password" class="tb-my-input" id="password" placeholder="*********************************" value="" aria-required="true"  required="">
                                        </fieldset>
                                        <fieldset class="style-pass">
                                            <p class="title-infor-account">{{ __('common.confirm_password') }}</p>
                                            <input type="password" name="password_confirmation" class="tb-my-input" placeholder="*********************************" value="" aria-required="true"  required="">
                                        </fieldset>
                                        <button class="submit button-login">{{ __('common.sign_up') }}</button>
                                    </div>
{{--                                    <div class="box-button">--}}
{{--                                        <div class="button-social">--}}
{{--                                            <a href="#" class="sc-button"><i class="fab fa-facebook-f"></i><span class="font">Continue With Facebook</span></a>--}}
{{--                                            <a href="#" class="sc-button style-2"><i class="fab fa-google-plus-g"></i><span class="font">Continue With Facebook</span></a>--}}
{{--                                            <a href="#" class="sc-button style-4"><i class="fab fa-instagram"></i><span class="font">Continue With Facebook</span></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#SubmitForm').on('submit',async function(e){
            e.preventDefault();
            try {
                let result = await $(this).sendRequest({
                    data: $(this).serialize(),
                    url: "{{route('submitRegister')}}",
                    alertSuccess: true,
                });
            } catch(err) {
                console.log(err);
            }
        });
    </script>
    <style>
        .login-register-wrap h3{
            text-transform: capitalize;
        }
    </style>
@endsection

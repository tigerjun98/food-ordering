@extends('user.layout')

@section('content')

    @component('user.components.layouts.breadcrumb', ['title' => 'login_or_register'])@endcomponent

    <div class="login-register-area section-padding-1 pt-100 pb-100">
        <div class="container">
            <div class="row text-capitalize">
                <div id="error_message"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="login-register-wrap mr-70">
                        <h3><i class="fa fa-user-o"></i>{{__('common.login')}}</h3>
                        <div class="login-register-form">
                            <form action="#" id="SubmitLoginForm">
                                @csrf
                                <div class="sin-login-register">
                                    <label>{{__('common.username_or_email')}}<span>*</span></label>
                                    <input type="text" name="name">
                                </div>
                                <div class="sin-login-register">
                                    <label>{{__('common.password')}} <span>*</span></label>
                                    <input type="password" name="password">
                                </div>
                                <div class="login-register-btn-remember">
                                    <div class="login-register-btn">
                                        <button type="submit" class="text-capitalize">{{__('common.login')}}</button>
                                    </div>
                                </div>
                                <a href="{{route('forgetPassword')}}">{{__('common.first_time_login')}} / {{__('common.lost_your_password')}}</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login-register-wrap register-wrap">
                        <h3><i class="fa fa-user-o"></i> {{__('common.register')}}</h3>
                        <div class="login-register-form">
                            <form action="#" id="SubmitRegisterForm">
                                @csrf
                                <style>

                                </style>
                                <div class="sin-login-register row">
                                    <div class="col-6 pl-0">
                                        <label>{{__('common.first_name')}} <span>*</span></label>
                                        <input type="text" name="first_name">
                                    </div>
                                    <div class="col-6 pr-0">
                                        <label>{{__('common.last_name')}} <span>*</span></label>
                                        <input type="text" name="last_name">
                                    </div>
                                </div>
                                <div class="sin-login-register">
                                    <label>{{__('common.email')}} <span>*</span></label>
                                    <input type="email" name="email">
                                </div>
                                <div class="sin-login-register">
                                    <label>{{__('common.password')}} <span>*</span></label>
                                    <input type="password" name="password">
                                </div>
                                <div class="sin-login-register">
                                    <label>{{__('common.confirm_password')}} <span>*</span></label>
                                    <input type="text" name="password_confirmation">
                                </div>
                                <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a></p>
                                <div class="login-register-btn">
                                    <button type="submit" class="text-capitalize">{{__('common.register')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#SubmitLoginForm').on('submit',async function(e){
            e.preventDefault();
            try {
                let result = await $(this).sendRequest({
                    data: $(this).serialize(),
                    url: "{{route('submitLogin')}}",
                });
                window.location.replace("{{route('order.')}}");
            } catch(err) {
                console.log(err);
            }
        });

        $('#SubmitRegisterForm').on('submit',async function(e){
            e.preventDefault();
            try {
                let result = await $(this).sendRequest({
                    data: $(this).serialize(),
                    url: "{{route('register')}}",
                });
                window.location.replace("{{route('order.')}}");
            } catch(err) {
                console.log(err);
            }
        });

        {{--$('#SubmitLoginForm').on('submit',function(e){--}}
        {{--    e.preventDefault();--}}
        {{--    $.ajax({--}}
        {{--        url: "{{route('submitLogin')}}",--}}
        {{--        type:"POST",--}}
        {{--        data: $(this).serialize(),--}}
        {{--        success:function(response){--}}
        {{--            window.location.replace("{{route('account')}}");--}}
        {{--        },--}}
        {{--        error: function(response) {--}}
        {{--            showAlert(response);--}}
        {{--        },--}}
        {{--    });--}}
        {{--});--}}

        {{--$('#SubmitRegisterForm').on('submit',function(e){--}}
        {{--    e.preventDefault();--}}
        {{--    $.ajax({--}}
        {{--        url: "{{route('register')}}",--}}
        {{--        type:"POST",--}}
        {{--        data: $(this).serialize(),--}}
        {{--        success:function(response){--}}
        {{--            window.location.replace("{{route('account')}}");--}}
        {{--        },--}}
        {{--        error: function(response) {--}}
        {{--            showAlert(response);--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}
    </script>
    <style>
        .login-register-btn button {
            background: {{ __('css.primary-color') }};
        }
        .login-register-wrap .login-register-form a {
            font-size: 12px;
            color: {{ __('css.primary-text') }};
        }
    </style>
@endsection

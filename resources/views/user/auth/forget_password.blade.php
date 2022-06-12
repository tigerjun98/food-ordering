@extends('user.layout')

@section('content')

    @component('user.components.layouts.breadcrumb', ['title' => 'reset_password'])@endcomponent

    <div class="login-register-area section-padding-1 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div id="error_message"></div>
                <div class="col-lg-12 col-md-12">
                    <div class="login-register-wrap mr-70 cc">
                        <h3><i class="fa fa-user-o"></i> {{__('common.'.$type.'_password')}}</h3>
                        <div class="login-register-form">
                            <form id="SubmitForm">
                                @csrf
                                @if($type == 'reset')
                                    <input type="hidden" name="email" value="{{app('request')->input('email')}}">
                                    <input type="hidden" name="token" value="{{app('request')->input('token')}}">
                                    <div class="sin-login-register">
                                        <label>{{__('common.new_password')}} <span>*</span></label>
                                        <input type="password" name="password" required>
                                    </div>

                                    <div class="sin-login-register">
                                        <label>{{__('common.confirm_password')}} <span>*</span></label>
                                        <input type="password" name="password_confirmation" required>
                                    </div>
                                @else
                                    <div class="sin-login-register">
                                        <label>{{__('common.email')}} <span>*</span></label>
                                        <input type="text" name="email" required>
                                    </div>
                                @endif

                                <div class="login-register-btn-remember">
                                    <div class="login-register-btn">
                                        <button type="submit">{{__('common.confirm')}}</button>
                                    </div>
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
                    url: "{{$type == 'reset' ? route('submitResetPassword', app('request')->input('token')) : route('submitForgetPassword')}}",
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

@extends('auth.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class="text-white h4 mb-2">WELCOME TO THE <br>HEALTHIEST COMMUNITY</p>
                        @if(session('referralBy') != null)
                            <p class="white mb-0 text-semi-muted">
                                We found that this register form is referral by
                                <span class="text-white">{{session('referralBy')}}</span>.
                                Please note that this Agent will always be your agent.
                                It is not allowed to change the agent from the future for any reason.
                            </p>
                        @else
                            <p class="white mb-0 text-semi-muted">
                                Please complete this register form to become our member now! <br>
                                If you are a member, please <a href="{{ route('login') }}" class="white">Login</a>.
                            </p>
                        @endif
                        <p class="white mb-0 text-semi-muted mt-4">
                            Register phone is <span class="white">+{{session('enerbe_register')[0]}}</span>
                            <br>If the phone number is wrong, please
                            <a href="{{ route('register','re_verify=1') }}" class="white">re-verify</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <span class="logo-single @if($errors->any()) mb-5 @endif"></span>

                        @alert @endalert

                        <h5 class="mb-4">Register</h5>
                        <form method="POST" action="{{ route('register') }}" id="registerForm" class="tooltip-right-bottom">
                            @csrf
                            <input type="hidden" name="country" value=" {{ $data['sms_country'] ?? null }}">
                            <input type="hidden" name="phone" value=" {{ $data['sms_phone'] ?? null }}">

{{--                            <div class="form-group position-relative mb-5">--}}
{{--                                <label>Target Level</label>--}}
{{--                                <select class="form-control select2-single" name="level_requirement_id" id="level_id" data-width="100%">--}}
{{--                                    @foreach(App\Models\Level::level('all-register') as $key => $lvl)--}}
{{--                                        <optgroup label="{{$lvl->level_name_en}}">--}}
{{--                                            @foreach(App\Models\LevelRequirement::getAllRequirement($lvl->level_id, 'register') as $key2 => $r)--}}
{{--                                                @if($r->level_requirement_type == 'first_purchase')--}}
{{--                                                    <option value="{{$r->level_requirement_id}}">Order {{$r->level_requirement_quantity}} {{App\Models\Product::getName($r->product_id,'en')}} in First Order</option>--}}
{{--                                                @elseif($r->level_requirement_type == 'shared')--}}
{{--                                                    <option value="{{$r->level_requirement_id}}">Order {{$r->level_requirement_purchase}} {{App\Models\Product::getName($r->product_id,'en')}} in First Order and Shared {{$r->level_requirement_quantity}} in a month</option>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </optgroup>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <div class="form-row">--}}
{{--                                <div class="form-group has-float-label col-md-12">--}}
{{--                                    <input class="form-control error" type="text" name="name" value="{{old('name')}}" id="name" autocomplete="username" required/>--}}
{{--                                    <span>Username</span>--}}
{{--                                    <small class="form-text text-muted">Username must be unique</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-row">
                                <div class="form-group has-float-label col-md-12">
                                    <input class="form-control error" type="text" name="full_name" id="full_name" required/>
                                    <span>Full Name</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group has-float-label col-md-12">
                                    <input class="form-control" type="email" name="email" value="{{old('email')}}" autocomplete="email" required/>
                                    <span>E-mail</span>
{{--                                    <small id="emailHelp" class="form-text text-muted">Email is the only path to reset your password.</small>--}}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group has-float-label col-md-6">
                                    <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}" autocomplete="new-password" required/>
                                    <span>Password</span>
                                </div>
                                <div class="form-group has-float-label col-md-6">
                                    <input class="form-control" type="password" name="password_confirmation" autocomplete="new-password"  required/>
                                    <span>Confirm Password</span>
                                </div>
                            </div>

{{--                            <div class="form-row">--}}
{{--                                <div class="form-group position-relative error-l-200">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="jQueryControlValidation"--}}
{{--                                               name="jQueryControlValidation" required>--}}
{{--                                        <label class="custom-control-label" for="jQueryControlValidation">I agree to <span>Terms and Condition</span></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <p class="text-semi-muted">By clicking Register, you agree to our
                                <a href="#">Terms</a>, and
                                <a href="#">Cookie Policy</a>
                                .
                            </p>

                            <div class="d-flex justify-content-end align-items-center">
{{--                                <button class="btn btn-outline-primary btn-lg btn-shadow mr-2"--}}
{{--                                        onclick="location.href='{{route('login')}}';" type="button">--}}
{{--                                    LOGIN</button>--}}
                                <button class="btn btn-primary btn-lg btn-shadow" id="submitBtn" type="submit">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){
            $("#registerForm").validate({
                submitHandler: function(form) {
                    $("#submitBtn").attr("disabled", true);
                    $.ajax({
                        url: '{{route('register')}}',
                        type: 'post',
                        data: $(form).serialize(),
                        success: function (response) {
                            if(response.success){
                                $.ajaxAlert("top", "right", "success", "Success", response.success[0], response.success[1]);
                                window.location.replace(response.success[1]);
                            } else if(response.errors){
                                $("#submitBtn").attr("disabled", false);
                                $.each( response.errors, function( key, val) {
                                    $.ajaxAlert("top", "right", "danger", "Error", val, "target");
                                });
                            } else{
                                $("#submitBtn").attr("disabled", false);
                                $.ajaxAlert("top", "right", "danger", "Error", "Undefined!", "target");
                            }
                        },
                        error : function(response) {
                            $.ajaxAlert("top", "right", "danger", "Error", "Undefined!", "target");
                            $("#submitBtn").attr("disabled", false);
                        },
                    });
                },

                rules: {
                    {{--name: {--}}
                    {{--    alphanumeric: true,--}}
                    {{--    required: true,--}}
                    {{--    nowhitespace: true,--}}
                    {{--    minlength: 5,--}}
                    {{--    maxlength: 20,--}}
                    {{--    remote: {--}}
                    {{--        url: "{{route('register-checkUsername')}}",--}}
                    {{--        type: "post",--}}
                    {{--        data: { "_token": "{{ csrf_token() }}",--}}
                    {{--            name: function() {--}}
                    {{--                return $( "#name" ).val();--}}
                    {{--            }--}}
                    {{--        }--}}
                    {{--    },--}}
                    {{--},--}}
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: "{{route('register-checkEmail')}}",
                            type: "post",
                            data: { "_token": "{{ csrf_token() }}",
                                name: function() {
                                    return $( "#email" ).val();
                                }
                            }
                        },
                    },
                    level_id: {
                        required: true,
                    },
                    full_name: {
                        required: true,
                        minlength: 5,
                        maxlength: 180,
                        pattern: /^[a-zA-Z\s]+$/, // letter with space only
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 20,
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 6,
                        maxlength: 20,
                        equalTo: "#password"
                    },

                },
                messages: {
                    name: {
                        remote: "username already in use"
                    },
                    email: {
                        remote: "Email already in use"
                    }
                },
            });
        };
    </script>
@endsection

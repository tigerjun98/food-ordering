@extends('auth.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class="text-white h4">WELCOME TO THE
                            HEALTHIEST COMMUNITY</p>
{{--                        <p class="white mb-0 text-semi-muted">--}}
{{--                            If you are a member, please--}}
{{--                            <a href="{{ route('login') }}" class="white">login</a>.--}}
{{--                        </p>--}}

                        @if(session('referralBy') != null)
                            <p class="white mb-0 text-semi-muted">
                                We found that this register form is referral by
                                <span class="text-white">{{session('referralBy')}}</span>.
                                Please note that this Agent will always be your agent.
                                It is not allowed to change the agent from the future for any reason.
                            </p>
                        @else
                            <p class="white mb-0 text-semi-muted">
                                Please complete the register form step by step to become our member now! <br>
                                If you are a member, please <a href="{{ route('login') }}" class="white">Login</a>.
                            </p>
                        @endif
                    </div>
                    <div class="form-side">
                        <span class="logo-single @if($errors->any()) mb-5 @endif"></span>

                        @alert @endalert

                        <h5 class="mb-4">Register</h5>

                        <form id="registerForm" class="tooltip-right-bottom">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label>Country</label>
                                    <select class="form-control select2-single" name="country" id="countryOption" required>
                                        <option value=""></option>
                                        @foreach(App\Models\Country::country(true) as $c)
                                            <option class="text-capitalize" value="{{$c->country_id}}">{{$c->country_name}}</option>
                                        @endforeach
                                    </select>
                                    @foreach(App\Models\Country::country(true) as $c)
                                        <div class="ds" id="{{$c->country_name}}">{{$c->country_code}}</div>
                                    @endforeach
                                </div>

                                <div class="form-group col-md-8 col-sm-12">
                                    <label>Phone</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" >+<span id="phoneCode"></span></span>
                                        </div>
                                        <input class="form-control" type="text" name="contact" autocomplete="phone" id="contact" placeholder="123456789" required/>
                                        <input type="hidden" name="phone" id="phone">
                                    </div>
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

                            <p class="text-semi-muted">By clicking Verify, you agree to our
                                <a href="#">Terms</a>, and
                                <a href="#">Cookie Policy</a>
                                .
                            </p>

                            <div class="d-flex justify-content-end align-items-center">
                                <button class="btn btn-outline-primary btn-lg btn-shadow mr-2 d-md-block d-none"
                                        onclick="location.href='{{route('login')}}';" type="button">
                                    LOGIN</button>
                                <button class="btn btn-primary btn-lg btn-shadow" id="submitBtn" type="submit">VERIFY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){

            $("#registerForm").validate({
                rules: {
                    country: {
                        required: true,
                    },
                    contact: {
                        required: true,
                        number: true,
                        nowhitespace: true,
                        minlength: 9,
                        maxlength: 10,
                        remote: {
                            url: "{{route('register-checkPhone')}}",
                            type: "post",
                            data: { "_token": "{{ csrf_token() }}",
                                contact: function() {
                                    $('#phone').val($( "#phoneCode" ).text() + $( "#contact" ).val());
                                    return $( "#phoneCode" ).text() + $( "#contact" ).val();
                                }
                            }
                        },
                    },
                },
                messages: {
                    contact: {
                        remote: "Phone already in use",
                        number: "Please enter a valid phone number!",
                        minlength: "Please enter a valid phone number!",
                        maxlength: "Please enter a valid phone number!",
                        nowhitespace: "Please enter a valid phone number!",
                    },
                },

                submitHandler: function(form) {
                    $("#submitBtn").attr("disabled", true);
                    $.ajax({
                        url: '{{ route('register-verifyForm') }}',
                        type: 'post',
                        data: $(form).serialize(),
                        success: function (response) {
                            if(response.success){
                                $.showAlert('success', response.success[0], response.success[1], response.success[2]);
                                window.location.replace(response.success[2]);
                            }else{
                                $.showAlert('danger', 'Errors', 'Try refresh page!', '{{route('register')}}');
                            }
                        },
                        error : function(response) {
                            $.showAlert('danger', 'Errors', 'Try refresh page!', '{{route('register')}}');
                            $("#submitBtn").attr("disabled", false);
                        },
                    });
                }
            });

            var $phoneCode = $("#phoneCode");
            var $country = $("#countryOption");

            $( "#countryOption" ).change(function() {
                var id = ( $("#countryOption option:selected" ).text());
                code = $('#'+id).html();
                $($phoneCode).html(code);
            });
        });
    </script>

@endsection

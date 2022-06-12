@extends('auth.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class="text-white h4">WELCOME TO THE
                            HEALTHIEST COMMUNITY</p>
                        <p class="white mb-0 text-semi-muted">
                            Verify Code sent to +{{ $phone ?? '' }}
                            <br>If the phone number is wrong, please
                            <a href="{{ route('register','re_verify=1') }}" class="white">re-verify</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <span class="logo-single @if($errors->any()) mb-5 @endif"></span>

                        @alert @endalert

                        <h5 class="mb-4">Verify Phone</h5>

                        <form method="POST" id="registerForm" class="tooltip-right-bottom">
                            @csrf
                            <input type="hidden" name="phone" value="{{$phone}}">
                            <div class="form-row">
{{--                                <div class="form-group has-float-label col-md-9">--}}
{{--                                    <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}" id="rulesName1" autocomplete="first_name" required/>--}}
{{--                                    <span>Full Name</span>--}}
{{--                                    <small class="form-text text-muted">Follow the name state in your IC or passport</small>--}}
{{--                                </div>--}}
                            </div>
                            <div class="form-row">
                                <div class="form-group has-float-label col-md-12">
                                    <input class="form-control" type="number" name="code" value="{{old('code')}}" autocomplete="null" id="code" required/>
                                    <span>Verify Code</span>
                                    <small class="form-text text-muted">Verify Code sent to {{$phone}}. Click resend if you didn't received!</small>
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
{{--                            <p class="text-semi-muted">By clicking Register, you agree to our--}}
{{--                                <a href="#">Terms</a>, and--}}
{{--                                <a href="#">Cookie Policy</a>--}}
{{--                                .--}}
{{--                            </p>--}}
                            <div class="d-flex justify-content-end align-items-center">
{{--                                <button class="btn btn-outline-primary btn-lg btn-shadow mr-2"--}}
{{--                                        onclick="location.href='{{route('login')}}';" type="button">--}}
{{--                                    LOGIN</button>--}}
                                <button class="btn btn-primary btn-lg btn-shadow mr-3" id="resendBtn" type="button" onclick="resend()">Resent</button>
                                <button class="btn btn-primary btn-lg btn-shadow" id="submitBtn" type="submit">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){
            updateTimer('{{$expired ?? 0}}');

            $("#registerForm").validate({
                submitHandler: function(form) {
                    $.ajax({
                        url: "{{route('register.validationCode')}}",
                        type: "POST",
                        data: $(form).serialize(),
                        success: function(response) {
                            if(response.success){
                                $.showAlert("success", response.success[0], response.success[1], response.success[2]);
                                window.location.replace(response.success[2]);
                            } else if(response.errors){
                                if($.isArray(response.errors) == true)
                                    $.each( response.errors, function( key, value ) {
                                        $.showAlert("danger", "Error", value);
                                    });
                                else
                                    $.showAlert("danger", "Error", response.errors);
                            } else{
                                $.showAlert("top", "right", "danger", "Error", "Underfined Errors! Try refresh page.", "{{route('register')}}");
                            }
                            $("#submitBtn").attr("disabled", false);
                        },
                        error: function(response) {
                            if(response.responseJSON.errors != null){
                                $.each( response.responseJSON.errors, function( key, value ) {
                                    $.showAlert("danger", response.responseJSON.message, value, "{{route('register')}}");
                                });
                            } else{
                                $.showAlert("danger", "Error", response.responseJSON.message, "{{route('register')}}");
                            }
                            $("#submitBtn").attr("disabled", false);
                        }
                    });
                    $("#submitBtn").attr("disabled", true);
                },

                rules: {
                    code: {
                        required: true,
                        number: true,
                        nowhitespace: true,
                        minlength: 6,
                        maxlength: 6,
                    },
                },

                messages: {
                    code: {
                        number: "Please enter a valid code number!",
                        minlength: "Please enter a valid code number!",
                        maxlength: "Please enter a valid code number!",
                        nowhitespace: "Please enter a valid code number!",
                    },
                },
            });
        };

        function updateTimer(countDownDate){

            $("#resendBtn").prop('disabled',true);
            var d = new Date(countDownDate);
            countDownDate = d.setSeconds(d.getSeconds() + 60);
            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                // document.getElementById("resendBtn").innerHTML = days + " days, " + hours + " hours, " +
                //     minutes + " minutes, & " + seconds + " seconds";

                if(minutes > 0){
                    $("#resendBtn").html('Resend in '+minutes+'m & '+seconds+'s');
                } else{
                    $("#resendBtn").html('Resend in '+seconds+'s');
                }

                // If the count down is over, write some text
                if (distance < 1) {
                    $("#resendBtn").prop('disabled',false);
                    clearInterval(x);
                    $("#resendBtn").html('Resend');
                    // document.getElementById("demo").innerHTML = '<a href="https://facebook.com">We\'re Live on Facebook!</a>';
                }
            }, 1000);
        }

        function resend(){
            $.ajax({
                type: "POST",//方法类型
                dataType: "json",//预期服务器返回的数据类型
                url: "{{route('register.resend')}}" ,//url
                data: {
                    "_token": "{{ csrf_token() }}",
                    "phone": "{{$phone ?? null}}",
                },
                success: function (response) {
                    if(response.success){
                        $.showAlert("success", "Success", response.success[0]);
                        updateTimer(response.success[1]);

                    } else if(response.errors){
                        $.each( response.errors, function( key, val) {
                            $.showAlert("danger", "Errors", value, "{{route('register')}}");
                        });
                    } else{
                        $.showAlert("danger", "Errors", "Underfined Errors! Try Refresh page!", "{{route('register')}}");
                    }
                },
                error: function(response) {
                    $.showAlert("danger", "Error", "Failed to resend", "{{route('register')}}");
                }
            });
        }


    </script>
@endsection

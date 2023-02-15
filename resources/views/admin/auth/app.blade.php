<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="manifest" href="{{ asset('/images/favicon/site.webmanifest') }}">
    <!-- CSRF Token -->
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>{{ config('app.name', 'Yilin') }}</title>

    {{ Vite::useBuildDirectory('/backendAssets') }}
    @vite(['resources/css/backend/app.scss', 'resources/css/backend/app.css', 'resources/js/backend/app.js'])

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/backend/vendor/select2.full.js') }}" defer></script>

    <style>
        .fixed-background {
            background: url('/images/admin/balloon.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .auth-card .image-side {
            background: url('{{ asset('/images/admin/balloon.jpg') }}') no-repeat center top;
        }

        .auth .logo {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 200px;
            height: 73px;
            background-size: contain !important;
            background-position: center center !important;
            margin: 0 auto;
            background-size: contain;
        }

        .logo-single {
            width: inherit;
            height: 57px;
            background: url('assets/images/logo/light.png') no-repeat;
            background-position: left;
            display: inline-block;
            margin-bottom: 60px;
            background-size: contain;
        }
        ol, ul, dl {
            margin-top: 0;
            margin-bottom: 0;
        }
        .alert_wrapper{
            width: 97%;
            position: fixed;
            top: 10px;
            z-index: 9999;
            padding: 20px 30px;
            border-radius: 6px;
            left: 50%;
            transform: translateX(-50%);
            height: auto;
            display: none;
        }
        .alert_wrapper.danger{
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
        }
        .alert_wrapper.success{
            color: #0f5132;
            background-color: #d1e6dd;
            border-color: #0f5132;
        }
        .alert_wrapper ul li{
            font-size: 14px;
            font-family: "Montserrat", sans-serif;
        }
        .alert_wrapper button{
            background: none;
            position: absolute;
            right: 20px;
            top: 15px;
            border: none;
            color: #831f29;
            font-size: 16px;
            border-radius: 50%;
        }
    </style>
</head>
<body class="background show-spinner">
    <div class="fixed-background"></div>
    <main>
        <div class="alert_wrapper" id="alert_wrapper">
            <button onclick="hideAlert()">x</button>
            <ul id="alert_message"></ul>
        </div>
        <x-admin.layout.alert />
        @yield('content')
    </main>
    <script>
        $.showLoading = function showLoading(id){
            $('body').addClass('show-spinner');
            $('#app').css('opacity','0.8');
            if(id){
                $('#'+id).prop('disabled',true);
                $('#'+id).addClass('disabled');
            }
        }

        $.hideLoading = function hideLoading(id){
            $('body').removeClass('show-spinner');
            $('#app').css('opacity','1');
            if(id){
                $('#'+id).prop('disabled',false);
                $('#'+id).removeClass('disabled');
            }
        }

        function hideAlert(){
            $("#alert_wrapper").hide().slideUp(700);
        }
        function showAlert(response, type='danger'){
            var errors = response.responseJSON;
            let errorsHtml = '';
            if(errors.errors && Object.keys(errors.errors).length > 0){
                $.each(errors.errors, function (k, v) {
                    errorsHtml += '<li>' + v + '</li>';
                });
            } else{
                errorsHtml = errors.message
            }


            $('#alert_message').html(errorsHtml);
            $("#alert_wrapper").hide().slideDown(700);
            $('#alert_wrapper').addClass(type);
        }
    </script>
</body>
</html>

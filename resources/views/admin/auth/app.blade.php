<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#08091e">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Yilin Workspace') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/images/favicon/safari-pinned-tab.svg') }}" color="#164923">
    <meta name="apple-mobile-web-app-title" content="Yilin Workspace">
    <meta name="application-name" content="Yilin Workspace">
    <meta name="msapplication-TileColor" content="#164923">
    {{ Vite::useBuildDirectory('/backendAssets') }}
    @vite(['resources/css/backend/app.scss', 'resources/css/backend/app.css', 'resources/js/backend/app.js'])

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>

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
        <x-admin.layout.alert />
        @yield('content')
    </main>
</body>

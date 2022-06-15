<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Meta -->
    <meta property="og:type" content="website">
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('locale', str_replace('_', '-', app()->getLocale())) !!}
    {!! Meta::tag('canonical', URL::current()) !!}
    {!! Meta::tag('title', env('APP_NAME')) !!}
    {!! Meta::tag('description') !!}
    {!! Meta::tag('image', asset('images/logo/logo.svg')) !!}
    @yield('meta')

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicon/site.webmanifest') }}">

    <!-- Datatable CSS -->
    <link href="{{ asset('assets/admin/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('assets/user/css/dore.light.blue.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/main.css') }}" rel="stylesheet">--}}

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/dist/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/dist/responsive.css') }}">


    <!-- Icon Font CSS -->
    <link href="{{ asset('assets/admin/font/iconsmind-s/css/iconsminds.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/font/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dore.script.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.single.theme.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/lazyload.min.js') }}"></script>

    <style>
        .cc{
            text-transform: capitalize;
        }
        .ds{
            display: none !important;
        }
        .logo {
             width: auto;
             height: auto;
            /* background: url(../img/logo-black.svg) no-repeat; */
            /* background-position: center center; */
             margin: 0;
        }
        .main-wrapper{
            background: #fff;
        }
        .btn-primary, .sidebar-cart-active .sidebar-cart-all .cart-content .cart-checkout-btn a, .main-menu > nav > ul > li > a::after{
            background: {{ __('css.primary-color') }} !important;
            color: #fff !important;;
        }
        a:hover {
            color: {{ __('css.primary-text') }} !important;
        }
        .custom.dropzone {
            min-height: 150px;
            border: 1px solid rgb(32 27 64);
            background: #ffffff08;
            padding: 20px 20px;
            position: relative;
        }
        .custom.dropzone .dz-message {
            text-align: center;
            font-size: 13px;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script>
        var lazyLoadInstance = new LazyLoad({
            // Your custom settings go here
        });
    </script>
</head>
<body class="body header-fixed">

<!-- preloade -->
<div class="preload preload-container">
    <div class="preload-logo"></div>
</div>
<!-- /preload -->

<div id="wrapper" class="wrapper-style">
    <div id="page" class="clearfix">
        @include('user.include.layouts.loading')
        @include('user.include.layouts.alert')
        @include('user.include.layouts.header')
        @yield('content')
        @include('user.include.layouts.footer')
    </div>
</div>

@include('user.include.layouts.modal')

<a id="scroll-top"></a>
<!-- Others JS -->
<script src="{{ asset('assets/user/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/user/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/user/js/swiper.js') }}"></script>

<script src="{{ asset('assets/user/js/plugin.js') }}"></script>
<script src="{{ asset('assets/user/js/count-down.js') }}"></script>
<script src="{{ asset('assets/user/js/shortcodes.js') }}"></script>
<script src="{{ asset('assets/user/js/main.js') }}"></script>

<script src="{{ asset('assets/user/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/user/js/switchmode.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

@include('app')
</body>
</html>

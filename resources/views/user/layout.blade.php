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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/vendor/bootstrap.min.css') }}">
    <!-- Datatable CSS -->
    <link href="{{ asset('assets/admin/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/dore.light.blue.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/main.css') }}" rel="stylesheet">

    <!-- Icon Font CSS -->
    <link href="{{ asset('assets/admin/font/iconsmind-s/css/iconsminds.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/font/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/user/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/vendor/themify.css') }}">
    <!-- othres CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/plugins/select2.min.css') }}">
    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/js/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/js/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/js/revolution/custom-setting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800|Dancing+Script:400,700|Caveat:400,700|Roboto+Condensed:300,400,700|Montserrat:300,400,500,600,700,800|Playfair+Display:400,400i,700,900&display=swap" rel="stylesheet">

    <script src="{{ asset('assets/user/js/vendor/jquery-v3.6.0.min.js') }}"></script>
{{--    <script src="{{ asset('assets/admin/js/vendor/jquery-3.3.1.min.js') }}"></script>--}}
    <script src="{{ asset('assets/admin/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/dore.script.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.single.theme.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/lazyload.min.js') }}"></script>

    <style>
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
        .cart-wrap a span.count-style {
            color: #fff;
            background: {{ __('css.primary-color') }};
        }
    </style>
    <script>
        var lazyLoadInstance = new LazyLoad({
            // Your custom settings go here
        });
    </script>
</head>
<body id="app-container">
@include('user.include.layouts.loading')
<div id="app" class="main-wrapper main-wrapper-2">
    @include('user.include.layouts.alert')
    @include('user.include.layouts.header')
    @include('user.include.layouts.sidebar')
    @include('user.include.layouts.modal')
    @include('user.include.layouts.cart')

    @yield('content')

    @include('user.include.layouts.footer')

{{--    <div class="support-lists">--}}
{{--        <ul>--}}
{{--            <li><a href="#"><i class=" ti-comments "></i></a></li>--}}
{{--            <li><a href="#"><i class=" ti-headphone-alt "></i></a></li>--}}
{{--            <li><a href="#"><i class=" ti-email "></i></a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
</div>

<!-- Modernizer JS -->
<script src="{{ asset('assets/user/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/user/js/vendor/popper.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/user/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!-- Revolution Slider JS -->
<script src="{{ asset('assets/user/js/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/revolution-active.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/user/js/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- Others JS -->
<script src="{{ asset('assets/user/js/plugins/instafeed.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/jquery-ui-touch-punch.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/parallax.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/paraxify.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/countdown.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/easyzoom.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/sticky-sidebar.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/tilt.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/user/js/plugins/wow.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/user/js/main.js') }}"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
{{--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f2f305722a093dd"></script>--}}

<!-- AddToAny BEGIN -->
{{--<div class="a2a_kit a2a_kit_size_32 a2a_default_style">--}}
{{--    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>--}}
{{--    <a class="a2a_button_facebook"></a>--}}
{{--    <a class="a2a_button_twitter"></a>--}}
{{--    <a class="a2a_button_facebook_messenger"></a>--}}
{{--    <a class="a2a_button_wechat"></a>--}}
{{--    <a class="a2a_button_whatsapp"></a>--}}
{{--    <a class="a2a_button_copy_link"></a>--}}
{{--</div>--}}
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

@include('app')
</body>
</html>

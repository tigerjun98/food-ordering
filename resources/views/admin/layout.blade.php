<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#ffffff">
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
    <!-- Favicon -->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">--}}
    <!-- Scripts -->

    <script src="{{ asset('js/backend/vendor/lazyload.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"
            integrity="sha512-osQTlub0mspbF8cmq5xylJ5kCJi42xglqltwx2pMI0/I78Y55dKpr3TtLB7nCTYka1AxpF1dOAeSFbgByDvS0Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <style>

        {{--.iti__flag {background-image: url("{{ Vite::asset('resources/img/vendor/intltel.flags.png') }}");}--}}


        main{
            position: relative;
        }

        #scrollUp{
            background-color: #30269C !important;
        }

    </style>

    <script>

        const myLazyLoad = new LazyLoad({
            event: "lazyload",
            effect: "fadeIn",
            effectspeed: 2000,
            callback_error: (img) => {
                img.setAttribute("src", "{{ asset('images/icons/common/img_not_found.svg') }}");
            }
        });

        var lazyLoadInstance = new LazyLoad({
            // Your custom settings go here
        });

    </script>
</head>
<body id="app-container" class="menu-default show-spinner rounded">
{{--    @include('user.include.layouts.loading')--}}
    <div id="app">
        @include('admin.include.layout.header')
        @include('admin.include.layout.sidebar')
{{--        @include('admin.include.layout.loading')--}}
        <main>
            <x-admin.layout.alert />

            <div id="modalWrapper"></div>

            <div class="container-fluid">
                @yield('content')
            </div>
            <script>
                lazyLoadInstance.update();
            </script>
        </main>
    </div>
    @include('app')

<script type="text/javascript">
    @stack('js')
</script>

</body>

</html>

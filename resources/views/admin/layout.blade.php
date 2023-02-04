<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#ffffff">
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">--}}
    <link rel="manifest" href="{{ asset('/images/favicon/site.webmanifest') }}">

    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title>Yilin</title>

    {{ Vite::useBuildDirectory('/backendAssets') }}
    @vite(['resources/css/backend/app.scss', 'resources/css/backend/app.css', 'resources/js/backend/app.js'])
    <!-- Favicon -->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">--}}
    <!-- Scripts -->

    <script src="{{ asset('assets/admin/js/lazyload.min.js') }}"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
{{--    <script--}}
{{--        src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"--}}
{{--    defer></script>--}}

{{--    <script src="{{ asset('assets/admin/js/vendor/jquery-3.3.1.min.js') }}"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/bootstrap.bundle.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/bootstrap-notify.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/bootstrap-tagsinput.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/Chart.bundle.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/chartjs-plugin-datalabels.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/moment.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/fullcalendar.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/datatables.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/perfect-scrollbar.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/daterangepicker.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/progressbar.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/jquery.barrating.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/select2.full.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/nouislider.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/bootstrap-datepicker.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/Sortable.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/mousetrap.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/cropper.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/dropzone.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/glide.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/jquery.smartWizard.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/jquery.validate/jquery.validate.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/jquery.validate/additional-methods.js') }}" defer></script>--}}

{{--    <script src="{{ asset('assets/admin/js/dore.script.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/dore-plugins/select.from.library.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/scripts.single.theme.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/ajaxfileupload.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/clipboard.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/pdf.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/pdf.worker.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/slick.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/admin/js/PDFObject.js') }}"></script>--}}
{{--    <script src="{{ asset('js/scripts.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/vendor/typeahead.bundle.js') }}" defer></script>--}}

{{--    <script src="{{ asset('js/image-compressor/image-compressor.esm.js') }}" defer></script>--}}
{{--    <script src="{{ asset('assets/admin/js/image-compressor/image-compressor.min.js') }}" defer></script>--}}
{{--    <script src="{{ asset('js/qrcode.min.js') }}"></script>--}}

{{--    <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>--}}

    {{--    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>--}}
    {{--    <script src="{{ asset('js/image-compressor/image-compressor.common.js') }}" defer></script>--}}

    <!-- Export -->
{{--    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>--}}


{{--    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>--}}


    <!-- Tracking.my -->
{{--    <script src="//www.tracking.my/track-button.js"></script>--}}

    <!-- intl-tel-input (Phone prefix) -->
{{--    <script src="{{ asset('assets/admin/js/intl-tel-input/intlTelInput.js') }}" defer></script>--}}

    <style>

        {{--.iti__flag {background-image: url("{{ Vite::asset('resources/img/vendor/intltel.flags.png') }}");}--}}

        .logo {
            /*background: url('/images/logo/logo.svg') no-repeat;*/
            background-size: contain;
            /*width: 77px;*/
            height: 59px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        @media (max-width: 767px){
            .logo {
                width: 110px;
            }
        }

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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.newTab = function openInNewTab(url) {
            var win = window.open(url, '_blank');
            win.focus();
        }
    </script>
</head>
<body id="app-container" class="menu-default show-spinner rounded">
@include('user.include.layouts.loading')
    <div id="app">
        @include('admin.include.layout.header')
        @include('admin.include.layout.sidebar')
{{--        @include('admin.include.layout.loading')--}}

        <main>
            <div id="modalWrapper"></div>

            <div class="container-fluid">
                @include('user.include.layouts.alert')
                @yield('content')
            </div>

            @include('admin.include.modal.update')
            @include('admin.include.modal.delete')

            <script>
                lazyLoadInstance.update();
            </script>
        </main>
    </div>
    @include('app')
</body>
</html>

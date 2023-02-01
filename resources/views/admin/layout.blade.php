<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title>Broker</title>

    <!-- Favicon -->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">--}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicon/site.webmanifest') }}">

    <!-- Scripts -->
    <script src="{{ asset('assets/admin/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/bootstrap-notify.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/bootstrap-tagsinput.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/Chart.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/chartjs-plugin-datalabels.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/moment.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/fullcalendar.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/daterangepicker.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/progressbar.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/jquery.barrating.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/select2.full.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/nouislider.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/Sortable.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/mousetrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/cropper.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/jquery.validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendor/jquery.validate/additional-methods.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dore.script.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dore-plugins/select.from.library.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/scripts.single.theme.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/ajaxfileupload.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/clipboard.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/pdf.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/pdf.worker.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/PDFObject.js') }}"></script>
{{--    <script src="{{ asset('js/scripts.js') }}" defer></script>--}}
    <script src="{{ asset('assets/admin/js/vendor/typeahead.bundle.js') }}"></script>

{{--    <script src="{{ asset('js/image-compressor/image-compressor.esm.js') }}" defer></script>--}}
    <script src="{{ asset('assets/admin/js/image-compressor/image-compressor.min.js') }}" defer></script>
{{--    <script src="{{ asset('js/qrcode.min.js') }}"></script>--}}
    <script src="{{ asset('assets/admin/js/lazyload.min.js') }}"></script>
    <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>

    {{--    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>--}}
    {{--    <script src="{{ asset('js/image-compressor/image-compressor.common.js') }}" defer></script>--}}

    <!-- Export -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


    <!-- Tracking.my -->
    <script src="//www.tracking.my/track-button.js"></script>

    <!-- intl-tel-input (Phone prefix) -->
{{--    <script src="{{asset('js/intlTelInput.js')}}"></script>--}}

    <!-- Fonts -->
{{--    <link href="{{ asset('assets/admin/font/iconsmind-s/css/iconsminds.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/font/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">--}}

    {{ Illuminate\Support\Facades\Vite::useBuildDirectory('/backendAssets') }}
    @vite(['resources/scss/backend/app.scss', 'resources/css/backend/app.css', 'resources/js/backend/app.js'])

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />--}}

    <!-- Styles -->
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap.rtl.only.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap-float-label.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap-tagsinput.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/fullcalendar.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/select2.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/select2-bootstrap.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/perfect-scrollbar.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/daterangepicker.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/glide.core.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap-stars.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/nouislider.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/cropper.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap-datepicker3.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/component-custom-switch.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/dropzone.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/smart_wizard.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/bootstrap-tagsinput.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/slick.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/quill.snow.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/vendor/quill.bubble.css') }}" rel="stylesheet">--}}

{{--    <link href="{{ asset('assets/admin/css/dore.light.blue.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/dore.dark.blue.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/admin/css/main.css') }}" rel="stylesheet">--}}

    <!-- intl-tel-input (Phone prefix) -->
{{--    <link href="{{ asset('assets/admin/css/intlTelInput.css') }}" rel="stylesheet">--}}

{{--    @include('admin.dore_script')--}}

    <style>
        /* intl-tel-input (Phone prefix) */
        .iti__flag {background-image: url("{{asset('img/flag/flags.png')}}");}
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .iti__flag {background-image: url("{{asset('img/flag/flags@2x.png')}}");}
        }


        body, p, .context-menu-item span, .context-menu-item span {

        }
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

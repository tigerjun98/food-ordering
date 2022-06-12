@extends('user.layout')

@section('content')
    @component('user.components.layouts.breadcrumb', ['title' => 'orders'])@endcomponent
    <style>
        .dataTables_wrapper{
            padding: 0;
        }
    </style>
    <div class="my-account-area pt-100 pb-95">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="myaccount-tab-menu nav" role="tablist">
                        <a href="javascript:filterStatus(0, this)" class="status-tab 0">{{ __('common.unpaid') }}</a>
                        <a href="javascript:filterStatus(1,[1,2])" class="status-tab 1">{{ __('common.pending') }}</a>
                        <a href="javascript:filterStatus(2,3)" class="status-tab 2">{{ __('common.shipping') }}</a>
                        <a href="javascript:filterStatus(3,[4,5])" class="status-tab 3">{{ __('common.completed') }}</a>
                        <a href="javascript:filterStatus(4,6)" class="status-tab 4">{{ __('common.cancelled') }}</a>
                    </div>


                    <script>
                        function filterStatus(status, val){
                            $("a.status-tab").removeClass("active");
                            $("a.status-tab."+status).addClass("active");
                            $('#status').val(val);
                            $.updateTableFunction()
                        }
                    </script>
                    <!-- My Account Tab Menu End -->
                    <!-- My Account Tab Content Start -->
                    <div class="tab-content" id="myaccountContent">
                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                            <div class="myaccount-content">
                                @component('user.components.table.layout', [
                                    'filter'    => \App\Models\OrderDetail::Filter(),
                                ]) @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//www.tracking.my/track-button.js"></script>
    <script>
        function linkTrack(num) {
            TrackButton.track({
                tracking_no: num
            });
        }
    </script>
    <style>
        .myaccount-tab-menu a:hover, .myaccount-tab-menu a.active {
            background: {{ __('css.primary-color') }};
            border-color:  {{ __('css.primary-border') }};
        }
        .myaccount-content .account-details-form .single-input-item button {
            background: {{ __('css.primary-color') }};
        }
    </style>
@endsection

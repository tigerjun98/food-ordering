@extends('user.layout')

@section('content')
    @component('user.components.layouts.breadcrumb', ['title' => 'my_account'])@endcomponent

    <div class="my-account-area pt-100 pb-95">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="myaccount-tab-menu nav text-capitalize" role="tablist">
                        <a href="#dashboad" class="active" data-bs-toggle="tab">{{__('common.dashboard')}}</a>
                        <a href="#address-edit" data-bs-toggle="tab"> {{__('common.address')}}</a>
                        <a href="#account-info" data-bs-toggle="tab">{{__('common.account_details')}}</a>
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('common.logout')}}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    <!-- My Account Tab Menu End -->
                    <!-- My Account Tab Content Start -->
                    <div class="tab-content" id="myaccountContent">
                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                            <div class="myaccount-content">
                                <div class="welcome">
                                    <p>Hello, <strong>{{Auth::check()}}</strong> (If Not <strong>{{Auth::user()->name}} !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
                                </div>

                                <p class="mb-0">From your account dashboard. you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                            @include('user.account.form.address')
                        </div>
                        <!-- Single Tab Content End -->

                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                            @include('user.account.form.details')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
    <style>
        .myaccount-tab-menu a:hover, .myaccount-tab-menu a.active {
            background: {{ __('css.primary-color') }};
            border-color:  {{ __('css.primary-border') }};
            color: #ffffff;
        }
    </style>
@endsection

@extends('user.layout')

@section('content')

    @component('user.components.layouts.breadcrumb', ['title' => 'checkout'])@endcomponent

    <!-- checkout start -->
    <div class="checkout-main-area pt-100 pb-100">
        <div class="container">
            @include('user.include.checkout.login')
            <div class="checkout-wrap">
                <div class="row">
                    <div class="col-lg-7">
                        @include('user.include.checkout.form')
                    </div>
                    <div class="col-lg-5">
                        @include('user.include.checkout.summary')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout end -->
@endsection

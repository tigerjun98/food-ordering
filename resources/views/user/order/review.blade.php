@extends('user.layout')

@section('content')

    @component('user.components.layouts.breadcrumb', ['title' => 'Rating'])@endcomponent

    <!-- checkout start -->
    <div class="checkout-main-area pt-100 pb-100">
        <div class="container">
            <div class="checkout-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        @include('user.include.rating.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout end -->
@endsection

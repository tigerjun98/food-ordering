@extends('user.layout')

@section('content')

    @component('user.components.layouts.breadcrumb', ['title' => 'products'])@endcomponent

    <div class="shop-area section-padding-1 pt-50 pb-80">
        <div class="container-fluid">
{{--            @include('user.include.product.sorting')--}}
{{--            @include('user.include.product.filter')--}}
            <div class="tab-content jump">
                <div id="shop-2" class="tab-pane active">
                    @include('user.include.product.listing')
                </div>

{{--                <div class="pro-pagination-style text-center">--}}
{{--                    <ul>--}}
{{--                        <li><a class="active" href="#">1</a></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#">4</a></li>--}}
{{--                        <li><a href="#"><i class=" ti-arrow-right "></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <script>
        @if(Auth::guard('user')->check())
        var url = new URL(window.location.href);
        var ref = url.searchParams.get("referral");
        if(!ref){
            window.history.pushState('page2', 'Title', window.location.href+'?referral={{Auth::guard('user')->check() ? Auth::user()->name : 'origin'}}');
        }
        @endif
    </script>
@endsection

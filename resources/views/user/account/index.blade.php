@extends('user.layout')

@section('content')
    @component('user.components.layouts.header', ['title' => 'my_profile'])@endcomponent

    <div class="tf-section flat-author-profile flat-explore flat-auctions ">
        <div class="container">
            <div class="flat-tabs tab-author">
                <div class="author-profile flex">
                    <div class="feature-profile flex">
                        <div class="img-box relative">
                            <img class="avatar" src="{{ asset('assets/user/images/box-item/author-profile.jpg') }}" alt="">
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="infor">
                            <h3 class="fs-24 text-color-1">{{ $data->name }}</h3>
                            <div class="box-price flat-price">
                                <div class="price flex">
                                    <img class="" src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price text-color-1">Balance: {{$data->total_deposit}} USDT</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button-profile flex">
                        <h3 class="text-color-1">Active</h3>
                        <div class="button-follow">
                            <a href="{{ route('transaction.deposit.index') }}" class="sc-button btn-6 style-1 tf-style cc"><span>{{ __('common.history') }}</span></a>
                        </div>
                        <div class="button-edit">
                            <a href="{{route('transaction.deposit.create')}}" class="sc-button btn-5 style-2 tf-style cc"><span>{{ __('common.deposit') }}</span></a>
                        </div>
                    </div>
                </div>
                <ul class="menu-tab tab-title cc">
                    <li class="item-title">
                        <h3 class="inner">{{ __('common.my_account') }}</h3>
                    </li>
                    <li class="item-title">
                        <h3 class="inner">{{ __('common.security') }}</h3>
                    </li>
                    <li class="item-title" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <h3 class="inner">{{ __('common.logout') }}</h3>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                <div class="content-tab">
                    <div class="content-inner tab-content">
                        @include('user.account.form.account')
                    </div>

                    <div class="content-inner tab-content mt-0 pt-0">
                        @include('user.account.form.security')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .flat-author-profile .tab-author .author-profile {
            background: url('{{asset('assets/user/images/backgroup-secsion/bg-author-profile.png')}}') no-repeat center;
        }
    </style>
@endsection

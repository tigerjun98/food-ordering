<?php $route = Route::current()->getName(); $ignore = ['home', 'aboutUs', 'product.show'];?>
<header id="header_main" class="header_1 js-header">
    <div class="themes-container">
        <div class="row">
            <div class="col-md-12">
                <div id="site-header-inner">
                    <div class="wrap-box flex">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img id="logo_header" src="assets/images/logo/logo_dark.png" alt="nft-gaming" width="92" height="47"
                                         data-retina="assets/images/logo/logo_dark@2x.png" data-width="133"
                                         data-height="56">
                                </a>
                            </div>
                        </div>
                        <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                        <nav id="main-nav" class="main-nav cc">
                            <ul id="menu-primary-menu" class="menu">

                                <li class="menu-item">
                                    <a href="{{route('home')}}">Home</a>
                                </li>

                                <li class="menu-item menu-item-has-children current-menu-item">
                                    <a href="#">Explore</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-item"><a href="{{ route('about') }}">About</a></li>
{{--                                        <li class="menu-item"><a href="home2.html">Home 2</a></li>--}}
{{--                                        <li class="menu-item"><a href="home3.html">Home 3</a></li>--}}
                                    </ul>
                                </li>

{{--                                <li class="menu-item menu-item-has-children">--}}
{{--                                    <a href="#">Explore</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li class="menu-item"><a href="explore.html">Explore</a></li>--}}
{{--                                        <li class="menu-item"><a href="live-auctions.html">Live Auctions</a></li>--}}
{{--                                        <li class="menu-item"><a href="live-auctions-details.html">Live Auctions Details</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

                                @if(Auth::check())
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="#">{{ __('common.account') }}</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{route('account')}}">{{ __('common.profile') }}</a></li>
                                            <li class="menu-item"><a href="{{route('transaction.deposit.index')}}">{{ __('common.history') }}</a></li>
                                        </ul>
                                    </li>
                                @endif


{{--                                <li class="menu-item">--}}
{{--                                    <a href="contact.html">Contact</a>--}}
{{--                                </li>--}}
                            </ul>
                        </nav><!-- /#main-nav -->
                        <div class="flat-search-btn flex mt-3 deposit-btn">
{{--                            <div class="header-search flat-show-search" >--}}
{{--                                <div class="top-search">--}}
{{--                                    <form action="#" method="get" role="search" class="search-form">--}}
{{--                                        <input type="search" id="s" class="search-field style" placeholder="Search Here..." value="" name="s" title="Search for" required="">--}}
{{--                                        <button class="search search-submit" type="submit" title="Search">--}}
{{--                                            <i class="far fa-search"></i>--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="sc-btn-top cc" id="site-header">
                                <a href="{{route('transaction.deposit.create')}}" class="sc-button header-slider style wallet fl-button pri-1">
                                    <span>{{ __('common.deposit') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mode_switcher">
        <a href="#" onclick="switchTheme()" class="light d-flex align-items-center">
            <img src="{{ asset('assets/user/images/icon/sun.png') }}" alt="">
        </a>
        <a href="#" onclick="switchTheme()" class="dark d-flex align-items-center is_active">
            <img src="{{ asset('assets/user/images/icon/moon.png') }}" alt="">
        </a>
    </div>

    <style>
        @media (max-width: 768px){
            .deposit-btn{
                transform: scale(0.8) !important;
                position: absolute;
                right: 56px;
                top: -15px !important;
                display: block !important;
            }
            .is-fixed .deposit-btn{
                top: 7px !important;
            }
            .mode_switcher{
                display: none;
            }
        }

    </style>
</header>

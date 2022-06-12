<?php $route = Route::current()->getName(); $ignore = ['home', 'aboutUs', 'product.show'];?>
<header class="header-area header-padding-1">
    <div class="main-header-wrap {{in_array($route, $ignore) ? '' : 'transparent-bar'}}">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-header-about-wrap">
                        <div class="logo logo-width">
                            <a href="/"><img src="{{ asset('/images/logo/logo.svg') }}" alt="logo"></a>
                        </div>
{{--                        <div class="header-about-icon ml-35">--}}
{{--                            <a class="quickinfo-button-active" href="#"><i class=" ti-align-left "></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="main-menu menu-lh-1">
                        <nav class="text-capitalize">
                            <ul>
                                <li><a href="{{route('home')}}" class="{{$route == 'home' ? 'active' : ''}}">{{ __('common.home') }}</a></li>
                                <li><a class="{{$route == 'product.show' ? 'active' : ''}} {{$route == 'promotion.' ? 'active' : ''}} {{$route == 'product' ? 'active' : ''}}" href="#">{{ __('common.product') }} <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu-width">
                                        <li><a class="{{$route == 'product' ? 'active' : ''}}"  href="{{route('product')}}">{{ __('common.all_product') }}</a></li>
                                        <li><a class="{{$route == 'promotion.' ? 'active' : ''}}" href="{{route('promotion.')}}">{{ __('common.promotion') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">{{ __('common.help') }} <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu-width">
                                        <li><a href="{{route('faq')}}">{{ __('common.faq') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contactUs')}}">{{ __('common.contact_us') }}</a></li>
                                @if(Auth::check())
                                    <li><a href="#" class="{{$route == 'order.' ? 'active' : ''}}">{{ __('common.account') }} <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu-width">
                                            <li><a href="{{route('account')}}">{{ __('common.my_profile') }}</a></li>
                                            <li><a href="{{route('order.')}}">{{ __('common.my_orders') }}</a></li>
                                            <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('common.logout') }}</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{route('login')}}" class="{{$route == 'login' ? 'active' : ''}}">{{ __('common.login') }}</a></li>
                                @endif

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="lang-cart-search-wrap">
                        <div class="language mr-55">
                            <ul>
                                <li><a class="{{App::isLocale('en') ? 'active' : ''}}" href="{{route('setLocale','en')}}">English</a></li>
                                    <li><a class="{{App::isLocale('cn') ? 'active' : ''}}" href="{{route('setLocale','cn')}}">中文</a></li>
                            </ul>
                        </div>
                        <div class="same-style cart-wrap ml-20">
                            <a href="#" class="cart-active">
                                <i class=" ti-shopping-cart "></i>
                                <span class="count-style" id="count-cart">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-mobile header-small-mobile-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo logo-width">
                        <a href="/">
                            <img alt="" src="{{ asset('/images/logo/logo.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-header-right-wrap">
                        <div class="same-style cart-wrap">
                            <a href="#" class="cart-active">
                                <i class=" ti-shopping-cart "></i>
                                <span class="count-style">0</span>
                            </a>
                        </div>
                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class=" ti-align-left "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-off-canvas-active">
    <a class="mobile-aside-close"><i class="ti-close"></i></a>
    <div class="header-mobile-aside-wrap">
        <div class="mobile-menu-wrap">
            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="{{route('home')}}">{{ __('common.home') }}</a></li>

                        <li class="menu-item-has-children">
                            <a href="#">{{ __('common.shop_now') }}</a>
                            <ul class="dropdown">
                                <li><a href="{{route('product')}}">{{ __('common.all_product') }}</a></li>
                                <li><a href="{{route('promotion.')}}">{{ __('common.promotions') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contactUs')}}">{{ __('common.contact_us') }}</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">{{ __('common.account') }}</a>
                            <ul class="dropdown">
                                <li><a href="{{route('account')}}">{{ __('common.my_profile') }}</a></li>
                                <li><a href="{{route('order.')}}">{{ __('common.my_orders') }}</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->
        </div>
        <div class="mobile-curr-lang-wrap text-capitalize">
            <div class="single-mobile-curr-lang mb-3">
                <a class="mobile-language-active" href="#">{{ __('langauge') }}<i class="fa fa-angle-down"></i></a>
                <div class="lang-curr-dropdown lang-dropdown-active">
                    <ul>
                        <li><a class="{{App::isLocale('en') ? 'active' : ''}}" href="{{route('setLocale','en')}}">English</a></li>
                        <li><a class="{{App::isLocale('cn') ? 'active' : ''}}" href="{{route('setLocale','cn')}}">中文</a></li>
                    </ul>
                </div>
            </div>
            <div class="single-mobile-curr-lang">
                @if(Auth::check())
                <a class="mobile-account-active" href="#">{{ __('common.my_account') }} <i class="fa fa-angle-down"></i></a>
                <div class="lang-curr-dropdown account-dropdown-active">
                    <ul>
                        <li><a href="{{route('account')}}">{{ __('common.my_profile') }}</a></li>
                        <li><a href="{{route('order.')}}">{{ __('common.my_orders') }}</a></li>
                        <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('common.logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
                @else
                    <a href="{{route('login')}}">{{ __('common.login') }} / {{ __('common.register') }}</a>
                @endif
            </div>
        </div>
{{--        <div class="mobile-social-wrap">--}}
{{--            <a class="facebook" href="#"><i class="ti-facebook"></i></a>--}}
{{--            <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>--}}
{{--            <a class="pinterest" href="#"><i class="ti-pinterest"></i></a>--}}
{{--            <a class="instagram" href="#"><i class="ti-instagram"></i></a>--}}
{{--            <a class="google" href="#"><i class="ti-google"></i></a>--}}
{{--        </div>--}}
    </div>
</div>
<style>
    .mobile-off-canvas-active .header-mobile-aside-wrap .mobile-curr-lang-wrap .single-mobile-curr-lang .lang-curr-dropdown{
        box-shadow: none;
    }
    .cart-wrap a span.count-style {
        top: -9px;
        background: #0050B4;
    }
    .main-menu > nav > ul > li > a::after {
        background: #0050B4 !important;
    }
    a:hover {
        color: #00A9EA !important;
    }
</style>

<nav class="navbar fixed-top">
    <div class="d-flex align-items-center navbar-left">
        <a href="#" class="menu-button d-none d-md-block">
            <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                <rect x="0.48" y="0.5" width="7" height="1" />
                <rect x="0.48" y="7.5" width="7" height="1" />
                <rect x="0.48" y="15.5" width="7" height="1" />
            </svg>
            <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                <rect x="1.56" y="0.5" width="16" height="1" />
                <rect x="1.56" y="7.5" width="16" height="1" />
                <rect x="1.56" y="15.5" width="16" height="1" />
            </svg>
        </a>

        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                <rect x="0.5" y="0.5" width="25" height="1" />
                <rect x="0.5" y="7.5" width="25" height="1" />
                <rect x="0.5" y="15.5" width="25" height="1" />
            </svg>
        </a>
    </div>


    <a class="navbar-logo" href="{{route('admin.home')}}">
        <img style="height: 43px;" src="{{ Vite::image('icons/logo.webp') }}" />
{{--        <span class="logo-mobile d-block d-xs-none"></span>--}}
    </a>

    <div class="navbar-right">
{{--        <div class="header-icons d-inline-block align-middle">--}}
{{--            <div class="position-relative d-inline-block">--}}
{{--                <button class="header-icon btn btn-empty" type="button" id="notificationButton"--}}
{{--                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="simple-icon-bell"></i>--}}
{{--                    <span class="count">3</span>--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">--}}
{{--                    <div class="scroll">--}}
{{--                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">--}}
{{--                            <a href="#">--}}
{{--                                <img src="img/profiles/l-2.jpg" alt="Notification Image"--}}
{{--                                     class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />--}}
{{--                            </a>--}}
{{--                            <div class="pl-3">--}}
{{--                                <a href="#">--}}
{{--                                    <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>--}}
{{--                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <span class="name">{{Auth::user()->full_name}}</span>
                <span>
                        <img alt="Profile Picture" src="{{asset('images/admin/balloon.jpg')}}" />
                    </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right mt-3">
{{--                @if(\Illuminate\Support\Facades\Gate::allows('log_management'))--}}
{{--                    <a class="dropdown-item" href="{{route('admin.log.')}}">--}}
{{--                        <i class="iconsminds-monitoring mr-1"></i>{{ __('common.logs') }}--}}
{{--                    </a>--}}
{{--                @endif--}}
                <a class="dropdown-item" href="{{ route('admin.profile', Auth::user()->id) }}">
                    <i class="iconsminds-profile mr-1"></i>
                    {{ __('common.profile') }}
                </a>
                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="iconsminds-anchor mr-1"></i>
                    {{ __('common.logout') }}
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>

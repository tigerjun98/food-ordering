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

    <a class="navbar-logo" href="#">
        <img src="{{ Vite::image('icons/logo.jpeg') }}" />
    </a>

    <div class="navbar-right">
        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <span class="name">{{Auth::user()->full_name}}</span>
                <span>
                        <img alt="Profile Picture" src="{{asset('images/admin/balloon.jpg')}}" />
                    </span>
            </button>

            @if(auth()->guard()->name == 'admin')
                <x-admin.header />
            @elseif(auth()->guard()->name == 'merchant')
                <x-merchant.header />
            @else
                <x-user.user-header />
            @endif
        </div>
    </div>
</nav>

<div class="dropdown-menu dropdown-menu-right mt-3">
    <a class="dropdown-item" href="{{ route('merchant.profile.index') }}">
        <i class="iconsminds-profile mr-1"></i>
        Profile
    </a>
    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="iconsminds-anchor mr-1"></i>
        Logout
    </a>
    <form id="logout-form" action="{{ route('merchant.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

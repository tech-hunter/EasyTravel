<nav class="navbar page-header">
    <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
        <i class="fa fa-bars"></i>
    </a>

    <a class="navbar-brand" href="#">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="logo">
        {{-- <h3 style="margin-bottom: 0px; font-weight: 500;">TravelNak</h3> --}}
    </a>

    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('backend/images/avatar-1.png') }}" class="avatar avatar-sm" alt="logo">
                <span class="small ml-1 d-md-down-none">Admin</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Account</div>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i> Profile
                </a>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-envelope"></i> Messages
                </a>

                <div class="dropdown-header">Settings</div>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-wrench"></i> Settings
                </a>

                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
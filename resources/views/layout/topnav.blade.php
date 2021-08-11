<div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{asset('argon/assets/img/theme/team-4.jpg')}}">
                        </span>
                        <div class="media-body  ml-2  d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                  
                    <div class="dropdown-divider"></div>
                    {{-- <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a> --}}
                    <form method="POST">
                        @csrf
                        <a href="{{ url('/') }}" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>{{ __('Keluar') }}</span>
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>



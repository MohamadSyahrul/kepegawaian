<div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
            <img src="{{asset('argon/assets/img/navbar-brand.svg')}}" class="navbar-brand-img" alt="...">
        </a>
    </div>
    <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <i class="ni ni-tv-2 text-primary"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Authentication</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationlogin') ? 'active' : '' }}" href="{{route('documentationlogin')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Login</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationregister') ? 'active' : '' }}" href="{{route('documentationregister')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Register</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Dokumentasi API Telegram</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">Check Bot User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Send Message to User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Send Message to Channel</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Pegawai</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawaiList') ? 'active' : '' }}" href="{{route('documentationpegawaiList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Data Struktural</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Creeate</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Unit</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Staf</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Data PNS</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Tidak Masuk Kerja</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Riwayat Pekerjaan</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Status</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Pelatihan</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Pendidikan</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Keluarga Pegawai</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Data Suami Istri</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">API Tanda Tangan Cuti</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examples/register.html">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

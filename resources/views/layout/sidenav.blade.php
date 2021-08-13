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
                    <a class="nav-link {{  request()->routeIs('documentationCheck') ? 'active' : '' }}" href="{{route('documentationCheck')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">Check User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationsendToUser') ? 'active' : '' }}" href="{{route('documentationsendToUser')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Send Message to User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationChannel') ? 'active' : '' }}" href="{{route('documentationChannel')}}">
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
                    <a class="nav-link" href="#">
                        <span class="badge badge-pill badge-success">get</span>
                        <span class="nav-link-text">Detail</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawaiUpdate') ? 'active' : '' }}" href="{{route('documentationpegawaiUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawaiDelete') ? 'active' : '' }}" href="{{route('documentationpegawaiDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationdata-strukturalList') ? 'active' : '' }}" href="{{route('documentationdata-strukturalList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationdata-strukturalCreate') ? 'active' : '' }}" href="{{route('documentationdata-strukturalCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Creeate</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationdata-strukturalUpdate') ? 'active' : '' }}" href="{{route('documentationdata-strukturalUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationdata-strukturalDelete') ? 'active' : '' }}" href="{{route('documentationdata-strukturalDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationunitList') ? 'active' : '' }}" href="{{route('documentationunitList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationunitCreate') ? 'active' : '' }}" href="{{route('documentationunitCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationunitUpdate') ? 'active' : '' }}" href="{{route('documentationunitUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationunitDelete') ? 'active' : '' }}" href="{{route('documentationunitDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationstafList') ? 'active' : '' }}" href="{{route('documentationstafList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationstafCreate') ? 'active' : '' }}" href="{{route('documentationstafCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationstafUpdate') ? 'active' : '' }}" href="{{route('documentationstafUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationstafDelete') ? 'active' : '' }}" href="{{route('documentationstafDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationdata-pnsList') ? 'active' : '' }}" href="{{route('documentationdata-pnsList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationdata-pnsCreate') ? 'active' : '' }}" href="{{route('documentationdata-pnsCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationdata-pnsUpdate') ? 'active' : '' }}" href="{{route('documentationdata-pnsUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationdata-pnsDelete') ? 'active' : '' }}" href="{{route('documentationdata-pnsDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-tidak-masuk-kerjaList') ? 'active' : '' }}" href="{{route('documentationpegawai-tidak-masuk-kerjaList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-tidak-masuk-kerjaCreate') ? 'active' : '' }}" href="{{route('documentationpegawai-tidak-masuk-kerjaCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-tidak-masuk-kerjaUpdate') ? 'active' : '' }}" href="{{route('documentationpegawai-tidak-masuk-kerjaUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-tidak-masuk-kerjaDelete') ? 'active' : '' }}" href="{{route('documentationpegawai-tidak-masuk-kerjaDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-riwayat-pekerjaanList') ? 'active' : '' }}" href="{{route('documentationpegawai-riwayat-pekerjaanList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-riwayat-pekerjaanCreate') ? 'active' : '' }}" href="{{route('documentationpegawai-riwayat-pekerjaanCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-riwayat-pekerjaanUpdate') ? 'active' : '' }}" href="{{route('documentationpegawai-riwayat-pekerjaanUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-riwayat-pekerjaanDelete') ? 'active' : '' }}" href="{{route('documentationpegawai-riwayat-pekerjaanDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationStatus') ? 'active' : '' }}" href="{{route('documentationStatus')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationStatusCreate') ? 'active' : '' }}" href="{{route('documentationStatusCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationStatusUpdate') ? 'active' : '' }}" href="{{route('documentationStatusUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationStatusDelete') ? 'active' : '' }}" href="{{route('documentationStatusDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationPelatihanList') ? 'active' : '' }}" href="{{route('documentationPelatihanList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationCreateCreate') ? 'active' : '' }}" href="{{route('documentationCreateCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationPelatihanUpdate') ? 'active' : '' }}" href="{{route('documentationPelatihanUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationPelatihanDelete') ? 'active' : '' }}" href="{{route('documentationPelatihanDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-pendidikanList') ? 'active' : '' }}" href="{{route('documentationpegawai-pendidikanList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-pendidikanCreate') ? 'active' : '' }}" href="{{route('documentationpegawai-pendidikanCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-pendidikanUpdate') ? 'active' : '' }}" href="{{route('documentationpegawai-pendidikanUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-pendidikanDelete') ? 'active' : '' }}" href="{{route('documentationpegawai-pendidikanDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationkeluarga-pegawaiList') ? 'active' : '' }}" href="{{route('documentationkeluarga-pegawaiList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationkeluarga-pegawaiCreate') ? 'active' : '' }}" href="{{route('documentationkeluarga-pegawaiCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationkeluarga-pegawaiUpdate') ? 'active' : '' }}" href="{{route('documentationkeluarga-pegawaiUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationkeluarga-pegawaiDelete') ? 'active' : '' }}" href="{{route('documentationkeluarga-pegawaiDelete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationSuamiIstri-list') ? 'active' : '' }}" href="{{route('documentationSuamiIstri-list')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationSuamiIstri-create') ? 'active' : '' }}" href="{{route('documentationSuamiIstri-create')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationSuamiIstri-update') ? 'active' : '' }}" href="{{route('documentationSuamiIstri-update')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationSuamiIstri-delete') ? 'active' : '' }}" href="{{route('documentationSuamiIstri-delete')}}">
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
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-ttd-cutiList') ? 'active' : '' }}" href="{{route('documentationpegawai-ttd-cutiList')}}">
                        <span class="badge badge-pill badge-success">Get</span>
                        <span class="nav-link-text">List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-ttd-cutiCreate') ? 'active' : '' }}" href="{{route('documentationpegawai-ttd-cutiCreate')}}">
                        <span class="badge badge-pill badge-primary">Post</span>
                        <span class="nav-link-text">Create</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-ttd-cutiUpdate') ? 'active' : '' }}" href="{{route('documentationpegawai-ttd-cutiUpdate')}}">
                        <span class="badge badge-pill badge-info">Put</span>
                        <span class="nav-link-text">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  request()->routeIs('documentationpegawai-ttd-cutiDelete') ? 'active' : '' }}" href="{{route('documentationpegawai-ttd-cutiDelete')}}">
                        <span class="badge badge-pill badge-danger">Delete</span>
                        <span class="nav-link-text">Delete</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

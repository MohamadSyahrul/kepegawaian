<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('title')
    </title>
    @include('layout.head')
    @stack('plugin-style')
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        @include('layout.sidenav')
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
           @include('layout.topnav')
        </nav>
        <!-- Header -->
        <!-- Header -->
        {{-- <div class="header bg-primary pb-6"> --}}
            {{-- @include('layout.header') --}}
        {{-- </div> --}}
        <!-- Page content -->
        {{-- <div class="container-fluid mt--6"> --}}
            @yield('content')
        {{-- </div> --}}
    </div>
    <!-- Argon Scripts -->
    @include('layout.script')

    @stack('plugin-script')
</body>

</html>

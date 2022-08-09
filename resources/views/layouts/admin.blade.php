<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <title>@yield('title')</title>
        @stack('prepend-style')
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
            <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
            <link href="{{ url('/admin/css/styles.css') }}" rel="stylesheet" />
        @stack('addon-style')
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        @include('includes.navbar-admin')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('includes.sidebar-admin')
            </div>
            <div id="layoutSidenav_content">
                @yield('container')
                @include('includes.footer-admin')                
            </div>
        </div>
        @stack('prepend-script')
            <script src="{{ url('/admin/js/jquery/jquery.min.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="{{ url('/admin/js/scripts.js') }}"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
            <script src="{{ url('/admin/js/litepicker.js') }}"></script>
        @stack('addon-script')
    </body>
</html>

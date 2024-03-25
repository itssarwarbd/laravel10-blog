<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.includes.meta')
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('') }}admin-assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('admin.includes.header')
        <div id="layoutSidenav">
            @include('admin.includes.sidebar')
            <div id="layoutSidenav_content">
                @yield('body')
             @include('admin.includes.footer')
            </div>
        </div>
        @include('admin.includes.js')
    </body>
</html>

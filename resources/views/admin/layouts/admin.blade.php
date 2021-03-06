<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/flat/blue.css')}}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            @section('head')
                @show
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('admin.inc.topbar')

            @include('admin.inc.sidebar')

            @yield('content')

            @include('admin.inc.footer')
        </div>
    </body>
</html>
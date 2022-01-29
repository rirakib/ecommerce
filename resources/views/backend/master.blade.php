<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('admin_title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('backend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('backend/build/css/custom.min.css')}}" rel="stylesheet">

    <style>
        .wrap-breadcrumb ul {
            padding: 0;
            text-align: left;
            margin: 35px 0;
        }

        .wrap-breadcrumb ul li {
            display: inline-block;
            list-style: none;
            text-align: left;
        }

        .wrap-breadcrumb ul li:not(:last-child)::after {
            content: '/';
            font-size: 13px;
            color: #222222;
            padding-left: 11px;
            padding-right: 11px;
        }

        .wrap-breadcrumb ul a {
            font-size: 13px;
            color: #666666;
            text-transform: uppercase;
        }

        .wrap-breadcrumb ul span {
            font-size: 13px;
            color: #222222;
            text-transform: uppercase;
        }
    </style>
</head>

<body class="nav-md">


    <div class="container body">
        <div class="main_container">
            @include('backend.component.sidebar')

            <!-- top navigation -->
            @include('backend.component.navbar')
            <!-- /top navigation -->

            <!-- page content -->
            @yield('admin_content')
            <!-- /page content -->

            <!-- footer content -->
            @include('backend.component.footer')
            <!-- /footer content -->
        </div>
    </div>






    <!-- jQuery -->
    <script src="{{asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('backend/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('backend/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('backend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('backend/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('backend/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('backend/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('backend/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('backend/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('backend/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('backend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('backend/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('backend/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('backend/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('backend/build/js/custom.min.js')}}"></script>

    


    <!-- Ajax script  -->
    <script src="{{asset('backend/ajax/ajax.js')}}"></script>
    @yield('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>
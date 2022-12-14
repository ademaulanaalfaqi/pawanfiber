<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Pawan Fiber</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('public/admin')}}/html/dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('public/admin')}}/html/dist/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('public/admin')}}/html/dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{url('public/admin')}}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{url('public/admin')}}/html/dist/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{url('public/admin')}}/html/dist/assets/css/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    @stack('maps')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- PAGE LEVEL STYLES-->
</head>

<body onload="getLocation()" class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('user.layout.header')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('user.layout.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-md-12">
                        @include('user.utils.notif')
                    </div>
                </div>
            </div>
            @yield('content')
            <!-- END PAGE CONTENT-->
            @include('user.layout.footer')
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <script src="{{url('public/admin')}}/html/dist/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <script>
        $(".table-datatable").dataTable();
        </script>
    <!-- CORE SCRIPTS-->
    <script src="{{url('public/admin')}}/html/dist/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{url('public/admin')}}/html/dist/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    
    @stack('script')
</body>

</html>
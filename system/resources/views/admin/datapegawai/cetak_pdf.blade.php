<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Cetak Data Pegawai</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ url('public/admin') }}/html/dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link href="{{ url('public/admin') }}/html/dist/assets/vendors/font-awesome/css/font-awesome.min.css"
        rel="stylesheet" />
    <link href="{{ url('public/admin') }}/html/dist/assets/vendors/themify-icons/css/themify-icons.css"
        rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ url('public/admin') }}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css"
        rel="stylesheet" />
    <link href="{{ url('public/admin') }}/html/dist/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ url('public/admin') }}/html/dist/assets/css/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <!-- PAGE LEVEL STYLES-->

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
        }

        #judul {
            font-size: 18px;
        }

        .image {
            height: 200px;
            display: block
        }

        .image img {
            height: 100%;
        }

        #centerjudul {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        td {
            border-top: none;
        }

        .invoice {
            padding: 20px
        }

        .invoice-header {
            margin-bottom: 50px
        }

        .invoice-logo {
            margin-bottom: 50px;
        }

        .table-invoice tr td:last-child {
            text-align: right;
        }
    </style>

</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->

        <!-- END HEADER-->
        <!-- START SIDEBAR-->

        <!-- END SIDEBAR-->

        <!-- START PAGE CONTENT-->
        <br>
        <div class="container" id="container-1">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-info float-right" type="button" onclick="javascript:window.print();"><i
                            class="fa fa-print"></i> Cetak</button>
                </div>
            </div>
        </div> <br>
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center mt-20">
                                        <strong id="judul">Data Pegawai</strong> <br> <span>Pawan Fiber</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="image">
                                        <img src="{{ url('public', $datapegawai->foto) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="ibox invoice">
                <div class="invoice-header">
                    <div class="row">
                        <div class="col-4 text-right"></div>
                        <div class="col-4" id="centerjudul">
                            <div class="font-bold text-center h5">
                                Data Pegawai
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="invoice-logo">
                                <img src="{{ url('public', $datapegawai->foto) }}" height="120px" />
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-borderless" style="border-top: none;">
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0">1. &nbsp Nama</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">2. &nbsp NIK</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->nik }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">3. &nbsp Email</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->email }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">4. &nbsp Nomor Telepon</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->no_handphone }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">5. &nbsp Divisi</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->divisi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">6. &nbsp Jabatan</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">7. &nbsp Kontrak Kerja</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->status_kerja }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">8. &nbsp Gaji Pokok</td>
                                                <td class="border-top-0">: &nbsp {{ $datapegawai->gaji_pokok_string }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="col-md-4">
                                    Nama
                                </div>
                                <div class="col-md-8">
                                    {{$datapegawai->nama}}
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END PAGE CONTENT-->


    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript">
    </script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/popper.js/dist/umd/popper.min.js"
        type="text/javascript"></script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js"
        type="text/javascript"></script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/metisMenu/dist/metisMenu.min.js"
        type="text/javascript"></script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript">
    </script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"
        type="text/javascript"></script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"
        type="text/javascript"></script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js"
        type="text/javascript"></script>
    <script src="{{ url('public/admin') }}/html/dist/assets/vendors/DataTables/datatables.min.js" type="text/javascript">
    </script>
    <script>
        $(".table-datatable").dataTable();
    </script>
    <!-- CORE SCRIPTS-->
    <script src="{{ url('public/admin') }}/html/dist/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ url('public/admin') }}/html/dist/assets/js/scripts/dashboard_1_demo.js" type="text/javascript">
    </script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    @stack('script')
</body>

</html>

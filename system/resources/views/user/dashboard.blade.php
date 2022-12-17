@extends('user.base')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $baru }}</h2>
                        <div class="m-b-5">Perizinan Baru</div><i class="ti-shopping-cart widget-stat-icon"></i>
                        <div><i class="fa fa-inbox m-r-5"></i><small>Pawan Fiber</small></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $diterima }}</h2>
                        <div class="m-b-5">Izin Diterima</div><i class="ti-check widget-stat-icon"></i>
                        <div><i class="fa fa-level-up m-r-5"></i><small>Pawan Fiber</small></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-danger color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $ditolak }}</h2>
                        <div class="m-b-5">Izin Ditolak</div><i class="ti-close widget-stat-icon"></i>
                        <div><i class="fa fa-level-down m-r-5"></i><small>Pawan Fiber</small></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-warning color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">{{ $total }}</h2>
                        <div class="m-b-5">Total Perizinan</div><i class="ti-bar-chart widget-stat-icon"></i>
                        <div><i class="fa fa-grip-lines m-r-5"></i><small>Pawan Fiber</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

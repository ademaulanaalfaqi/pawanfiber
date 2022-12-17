@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Perizinan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>{{$izin->datapegawai->nama}}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"> <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><strong> Tanggal Mulai</strong></div>
                                        <div class="col-md-6">{{date('d F Y', strtotime($izin->tanggal_mulai))}}</div>
                                    </div>
                                </div><hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><strong> Sampai</strong></div>
                                        <div class="col-md-6">{{date('d F Y', strtotime($izin->tanggal_selesai))}}</div>
                                    </div>
                                </div><hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><strong> Tipe Izin</strong></div>
                                        <div class="col-md-6">{{$izin->tipe_izin}}</div>
                                    </div>
                                </div><hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><strong> Keterangan</strong></div>
                                        <div class="col-md-6">{{$izin->keterangan}}</div>
                                    </div>
                                </div><hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><strong> Status</strong></div>
                                        <div class="col-md-6">
                                            @if ($izin->status == 1)
                                                <span class="badge badge-info">Pengajuan Baru</span>
                                            @endif

                                            @if ($izin->status == 2)
                                            <span class="badge badge-success">Pengajuan Diterima</span>
                                            @endif

                                            @if ($izin->status == 3)
                                                <span class="badge badge-danger">Pengajuan Ditolak</span>
                                            @endif
                                        </div>
                                    </div>
                                </div><hr>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body" style="height: 250px">
                                        <div class="image" style="height: 220px; display: flex; justify-content: center;">
                                            <img style="height: 100%;" src="{{url("public/$izin->foto")}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
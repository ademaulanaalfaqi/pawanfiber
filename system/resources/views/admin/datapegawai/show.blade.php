@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/datapegawai') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            Detail Pegawai
                            <a href="{{url('admin/datapegawai', $datapegawai->id)}}/cetak_pdf" target="_blank" class="btn btn-success float-right"> Cetak</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>{{ $datapegawai->nama }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">NIK</div>
                                        <div class="col-md-6">{{ $datapegawai->nik }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">Email</div>
                                        <div class="col-md-6">{{ $datapegawai->email }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">Divisi</div>
                                        <div class="col-md-6">{{ $datapegawai->divisi }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">Jabatan</div>
                                        <div class="col-md-6">{{ $datapegawai->jabatan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">Tanggal Masuk</div>
                                        <div class="col-md-6">{{ date('d F Y', strtotime($datapegawai->tanggal_masuk)) }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body" style="height: 250px; display: flex; justify-content: center">
                                        <img style="height: 100%" src="{{ url('public', $datapegawai->foto) }}" alt="">
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

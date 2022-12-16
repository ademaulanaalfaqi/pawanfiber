@extends('admin/base')
@section('content')
@include('admin.section.notif')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Izin</div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/izin')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Pengajuan</label>
                                        <input type="date" name="tanggal_pengajuan" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Hari</label>
                                        <input type="text" name="hari" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tipe Izin</label>
                                        <select name="tipe_izin" id="" class="form-control">
                                            <option value="">Piih</option>
                                            <option value="Cuti">Cuti</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Sakit">Sakit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept=".png, .jpg, .jpeg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control">
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('user.base')
@section('content')
    <div class="container mt-3">
        <a href="{{url('user/izin')}}" class="btn btn-dark mb-1"><i class="fa fa-arrow-left"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Izin</div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('user/izin')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$pegawai->id}}" name="id_user">
                           
                            <div class="row">
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
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tipe Izin</label>
                                        <select name="tipe_izin" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="Cuti">Cuti</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Sakit">Sakit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" class="form-control-file" name="foto" accept=".png, .jpg, .jpeg">
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
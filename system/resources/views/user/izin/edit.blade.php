@extends('user.base')
@section('content')
    <div class="container mt-3">
        <a href="{{url('user/izin')}}" class="btn btn-dark mb-1"><i class="fa fa-arrow-left"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Izin</div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('user/izin', $izin->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" class="form-control" value="{{$izin->tanggal_mulai}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" class="form-control" value="{{$izin->tanggal_selesai}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tipe Izin</label>
                                        <select name="tipe_izin" id="" class="form-control">
                                            <option selected="{{$izin->id}}">{{$izin->tipe_izin}}</option>
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
                                <input type="text" name="keterangan" class="form-control" value="{{$izin->keterangan}}">
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
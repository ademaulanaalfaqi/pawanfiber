@extends('user.base')
@section('content')
    <div class="container mt-3">
        <a href="{{url('user/lembur')}}" class="btn btn-dark mb-1"><i class="fa fa-arrow-left"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Lembur</div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('user/lembur')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Aktifitas</label>
                                <textarea name="aktifitas" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
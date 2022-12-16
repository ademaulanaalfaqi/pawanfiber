@extends('user.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Dinas</strong></h5>
                <div class="card">
                    <div class="card-body">
                        <a href="{{url('user/dinas/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Permintaan</a>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Kegiatan</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_dinas as $dinas)
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('user/dinas', $dinas->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                </div>
                                            </td>
                                            <td>{{$dinas->nama}}</td>
                                            <td>{{date('d F Y', strtotime($dinas->tanggal_mulai))}}</td>
                                            <td >{!! substr(($dinas->deskripsi_dinas),0 ,70) !!}...</td>
                                        </tr>                   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
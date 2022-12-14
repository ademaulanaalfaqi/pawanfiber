@extends('user.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Dinas
                            <a href="{{url('user/dinas/create')}}" class="btn btn-warning float-right"><i class="fa fa-plus"></i> Tambah Permintaan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                                            <td>{{date('d F Y', strtotime($dinas->tanggal))}}</td>
                                            <td >{!! substr(($dinas->kegiatan),0 ,70) !!}...</td>
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
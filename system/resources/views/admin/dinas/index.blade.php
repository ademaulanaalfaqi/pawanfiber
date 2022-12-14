@extends('admin.base')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Dinas</strong></h5>
                <div class="card">
                    <div class="card-body">
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
                                                    <a href="{{url('admin/dinas', $dinas->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                </div>
                                            </td>
                                            <td>{{$dinas->nama}}</td>
                                            <td>{{date('d F Y', strtotime($dinas->tanggal))}}</td>
                                            <td>{{$dinas->kegiatan}}</td>
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
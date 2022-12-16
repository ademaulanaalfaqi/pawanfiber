@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Lembur</strong></h5>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Aktifitas</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_lembur as $lembur)
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('admin/lembur', $lembur->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                    @include('admin.utils.delete', ['url' => url('admin/lembur', $lembur->id)])
                                                </div>
                                            </td>
                                            <td>{{$lembur->nama}}</td>
                                            <td>{{date('d F Y', strtotime($lembur->created_at))}}</td>
                                            <td>{{date('H.i', strtotime($lembur->created_at))}}</td>
                                            <td>
                                                @if ($lembur->lembur == 2)
                                                    {{ date('H.i', strtotime($lembur->selesai)) }}                                                    
                                                @endif
                                                @if ($lembur->lembur == 1)
                                                    -                                                    
                                                @endif
                                            </td>
                                            <td>{{$lembur->aktifitas}}</td>
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
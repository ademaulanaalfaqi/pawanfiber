@extends('user.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Lembur</strong></h5>
                <div class="card">
                    <div class="card-body">
                        <a href="{{url('user/lembur/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Permintaan</a> <hr>
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
                                                    <a href="{{url('user/lembur', $lembur->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                    @if ($lembur->lembur == 1)
                                                        <form action="{{url('user/selesai', $lembur->id)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="time" name="selesai" value="{{date('H:i:s')}}" hidden>
                                                            <button class="btn btn-warning">Pulang</button>
                                                        </form>
                                                    @endif
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
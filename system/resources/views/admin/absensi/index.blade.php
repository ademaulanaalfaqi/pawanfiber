@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Absensi</strong></h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('admin/absensi/filter')}}" method="post">
                            @csrf
                            <div class="form-inline">
                                <input type="date" name="filter_tanggal" class="form-control" style="width: 150px">
                                <button class="btn btn-info ml-3">Filter</button>
                            </div>
                        </form> <hr>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <tr>
                                        <th rowspan="2">Nama</th>
                                        <th colspan="4" style="text-align: center">{{$hari_ini}}</th>
                                        <th rowspan="2">Maps</th>
                                    </tr>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Masuk</th>
                                        <th>Istirahat</th>
                                        <th>Pulang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_absensi as $absensi)
                                        <tr>
                                            <td>{{$absensi->nama}}</td>
                                            <td>
                                                <div class="image" style="height: 50px">
                                                    <img style="height: 100%" src="{{ url("public/$absensi->foto") }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>{{ $absensi->created_at->format('H.i') }}</td>
                                            <td>
                                                @if ($absensi->istirahat == 2)
                                                    {{ date('H.i', strtotime($absensi->jam_istirahat)) }}                                                    
                                                @endif
                                                @if ($absensi->istirahat == 1)
                                                    -                                                    
                                                @endif
                                            </td>
                                            <td>
                                                @if ($absensi->pulang == 2)
                                                    {{ date('H.i', strtotime($absensi->jam_pulang)) }}                                                    
                                                @endif
                                                @if ($absensi->pulang == 1)
                                                    -                                                    
                                                @endif
                                            </td>
                                            <td><a href="{{ url('admin/absensi', $absensi->id) }}" class="btn btn-dark">Lokasi</a></td>
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

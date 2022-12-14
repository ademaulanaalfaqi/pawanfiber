@extends('user.base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Absensi</strong></h5>
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('user/absensi/create') }}" class="btn btn-outline-warning"><i class="fa fa-plus"></i>Absen</a>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Istirahat</th>
                                        <th>Pulang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_absensi as $absensi)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('user/absensi', $absensi->id) }}" class="btn btn-dark">Lokasi</a>
                                                    @if ($absensi->istirahat == 1)
                                                        <form action="{{url('user/istirahat', $absensi->id)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" name="jam_istirahat" value="{{date('H:i:s')}}" hidden>
                                                            <button class="btn btn-warning">Istirahat</button>
                                                        </form>
                                                    @endif
                                                    @if ($absensi->pulang == 1)
                                                        <form action="{{url('user/pulang', $absensi->id)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" name="jam_pulang" value="{{date('H:i:s')}}" hidden>
                                                            <button class="btn btn-warning">Pulang</button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $absensi->datapegawai->nama }}</td>
                                            <td>
                                                <div class="image" style="height: 50px">
                                                    <img style="height: 100%" src="{{ url('public', $absensi->foto) }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>{{$absensi->created_at->format('d F Y')}}</td>
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

    <!-- Modal -->
    <div class="modal fade" id="istirahatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user/storeAbsensi') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input onclick="getLocation()" type="file" class="form-control-file" name="foto">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="longitude">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="latitude">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="pulangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Absen Pulang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('user/storeAbsensi') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="radio" id="customRadio1" value="1" name="level" class="form-control-input">
                            <label class="form-control-label" for="customRadio1">Hadir</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" id="customRadio2" value="2" name="level" class="form-control-input">
                            <label class="form-control-label" for="customRadio2">Tidak Hadir</label>
                        </div>
                        <button class="btn btn-warning float-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Izin</strong></h5>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tipe Izin</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_izin as $izin)
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                @if ($izin->status == 1)
                                                    <form action="{{url('admin/setuju', $izin->id)}}" method="post">
                                                        @csrf
                                                        @method("PUT")
                                                        <button class="btn btn-success"><i class="fa fa-check"></i> Setuju</button>
                                                    </form>
    
                                                    <form action="{{url('admin/tolak', $izin->id)}}" method="post">
                                                        @csrf
                                                        @method("PUT")
                                                        <button class="btn btn-danger"><i class="fa fa-times"></i> Tolak</button>
                                                    </form>
                                                @endif
                                                <a href="{{url('admin/izin', $izin->id)}}" class="btn btn-default"><i class="fa fa-info"></i> Lihat</a>
                                            </div>
                                        </td>
                                        <td>{{$izin->datapegawai->nama}}</td>
                                        <td>{{date('d F Y', strtotime($izin->created_at))}}</td>
                                        <td>{{date('d F Y', strtotime($izin->tanggal_mulai))}}</td>
                                        <td>{{$izin->tipe_izin}}</td>
                                        <td>{{$izin->keterangan}}</td>
                                        <td>
                                            @if ($izin->status == 1)
                                                <span class="badge badge-info">Pengajuan Baru</span>
                                            @endif
    
                                            @if ($izin->status == 2)
                                            <span class="badge badge-success">Pengajuan Diterima</span>
                                            @endif
    
                                            @if ($izin->status == 3)
                                                <span class="badge badge-danger">Pengajuan Ditolak</span>
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
@endsection
@extends('user.base')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <h5><strong>// Izin dan Cuti</strong></h5>
                <div class="card">
                    <div class="card-body">
                        <a href="{{url('user/izin/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Permintaan</a> <hr>
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
                                                    <a href="{{url('user/izin', $izin->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                    @if ($izin->status == 1)
                                                        <a href="{{url('user/izin', $izin->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>                                                        
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{$izin->datapegawai->nama}}</td>
                                            <td>{{$izin->created_at->format('d F o')}}</td>
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
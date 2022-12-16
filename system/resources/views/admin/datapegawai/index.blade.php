@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <strong>// Data Pegawai</strong>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('admin/datapegawai/create') }}" class="btn btn-outline-success "><i
                                class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                        <div class="table-responsive mt-3">
                            <table class="table table-datatable table-bordered" cellspacing="0">
                                <thead class="thead-default">
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Masuk</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_datapegawai as $datapegawai)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/datapegawai', $datapegawai->id) }}"
                                                        class="btn btn-dark"><i class="fa fa-info"
                                                            data-feather="check-square"></i> Lihat</a>

                                                    <a href="{{ url('admin/datapegawai', $datapegawai->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"
                                                            data-feather="check-square"></i> Edit</a>
                                                    @include('admin.utils.delete', [
                                                        'url' => url('admin/datapegawai', $datapegawai->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td>{{ $datapegawai->nama }}</td>
                                            <td>{{ $datapegawai->divisi }}</td>
                                            <td>{{ $datapegawai->jabatan }}</td>
                                            <td>{{date('d F Y', strtotime($datapegawai->tanggal_masuk))}}</td>
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

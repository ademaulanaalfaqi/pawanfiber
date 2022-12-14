@extends('admin.base')

@section('content')
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
                        <a href="{{ ('exportpegawai') }}" class="btn btn-outline-warning "><i class="fa fa-upload"></i>
                            Import
                            Excel</a>
                        <div class="table-responsive mt-3">
                            <table class="table table-datatable table-striped table-bordered table-hover" cellspacing="0"
                                width="100%">
                                <thead>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama</th>
                                    <th style="text-align: center">Aksi</th>
                                    <th style="text-align: center">Divisi</th>
                                    <th style="text-align: center">Jabatan</th>
                                    <th style="text-align: center">Tanggal Masuk</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_datapegawai as $datapegawai)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $datapegawai->nama }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/datapegawai', $datapegawai->id) }}"
                                                        class="btn btn-outline-info"><i class="fa fa-eye"
                                                            data-feather="check-square"></i> Lihat</a>

                                                    <a href="{{ url('admin/datapegawai', $datapegawai->id) }}/edit"
                                                        class="btn btn-outline-warning"><i class="fa fa-edit"
                                                            data-feather="check-square"></i> Edit</a>
                                                    @include('admin.utils.delete', [
                                                        'url' => url('admin/datapegawai', $datapegawai->id),
                                                    ])
                                                </div>
                                            </td>
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

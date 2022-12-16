@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Admin
                            <a href="{{url('admin/admin/create')}}" class="btn btn-warning float-right"><i class="fa fa-plus"></i> Tambah Admin</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-datatable">
                            <thead class="thead-default">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($list_admin as $admin)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url('admin/admin', $admin->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                @include('admin.utils.delete', ['url' => url('admin/admin', $admin->id)])
                                            </div>
                                        </td>
                                        <td>{{$admin->nama}}</td>
                                        <td>{{$admin->username}}</td>
                                        <td>{{$admin->email}}</td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('user.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <a href="{{'dashboard'}}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="card-title">Profile</div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="image" style="height: 200px; display: flex; justify-content: center;">
                                                <img src="{{url('public', request()->user()->foto)}}" alt="Foto Profil" style="height: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div> <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-borderless" style="border-top: none;">
                                        <tbody>
                                            <tr>
                                                <td>1. &nbsp Nama</td>
                                                <td>: &nbsp {{ request()->user()->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td>2. &nbsp NIK</td>
                                                <td>: &nbsp {{ request()->user()->nik }}</td>
                                            </tr>
                                            <tr>
                                                <td>3. &nbsp Email</td>
                                                <td>: &nbsp {{ request()->user()->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>4. &nbsp Nomor Telepon</td>
                                                <td>: &nbsp {{ request()->user()->no_handphone }}</td>
                                            </tr>
                                            <tr>
                                                <td>5. &nbsp Divisi</td>
                                                <td>: &nbsp {{ request()->user()->divisi }}</td>
                                            </tr>
                                            <tr>
                                                <td>6. &nbsp Jabatan</td>
                                                <td>: &nbsp {{ request()->user()->jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td>7. &nbsp Kontrak Kerja</td>
                                                <td>: &nbsp {{ request()->user()->status_kerja }}</td>
                                            </tr>
                                            <tr>
                                                <td>8. &nbsp Gaji Pokok</td>
                                                <td>: &nbsp {{ request()->user()->gaji_pokok_string }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/datapegawai') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Tambah Data Pegawai</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/datapegawai') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIK</label>
                                        <input type="text" class="form-control" name="nik" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-3">
                                <div class="col-md-3">
                                    <label for="">Divisi</label>
                                    <div class="form-grup">
                                        <select class="custom-select custom-select-lg mb-3 form-control" name="divisi" required>
                                            <option selected> ------ Pilih Opsi ------ </option>
                                            <option value="1">HRD & GA</option>
                                            <option value="2">Finance</option>
                                            <option value="3">Sales & marketing</option>
                                            <option value="4">Network & Technical</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Jabatan</label>
                                    <div class="form-grup">
                                        <select class="custom-select custom-select-lg mb-3 form-control" name="jabatan" required>
                                            <option selected> ------ Pilih Opsi ------ </option>
                                            <option value="1">HRD GA</option>
                                            <option value="2">Kepala Cabang</option>
                                            <option value="3">Kepala Teknisi</option>
                                            <option value="4">Leader Finance AP</option>
                                            <option value="5">Leader Finance AR</option>
                                            <option value="6">Leader Sales</option>
                                            <option value="7">Leader IKR</option>
                                            <option value="8">Costumer Service</option>
                                            <option value="9">Staff Accounting</option>
                                            <option value="10">Staff Inventory</option>
                                            <option value="11">Staff Finance</option>
                                            <option value="12">Staff Teknisi</option>
                                            <option value="13">Office Boy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Status Kerja </label>
                                    <div class="form-grup">
                                        <select class="custom-select custom-select-lg mb-3 form-control"
                                            name="status_kerja" required>
                                            <option selected> ------ Pilih Opsi ------ </option>
                                            <option value="1">Tetap </option>
                                            <option value="2">Kontrak</option>
                                            <option value="3">Magang/Training</option>
                                            <option value="4">Freelance/Partime</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Jam Kerja</label>
                                    <div class="form-grup">
                                        <select class="custom-select custom-select-lg mb-3 form-control" name="jam_kerja" required>
                                            <option selected> ------ Pilih Opsi ------ </option>
                                            <option value="1">Senin - Jumat </option>
                                            <option value="2">Senin - Sabtu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-3">
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="">Gaji Pokok</label>
                                        <div class="input-group">
                                            <div class="input-group-addon bg-white">Rp.</div>
                                            <input class="form-control" type="text" name="gaji_pokok" required>
                                            <div class="input-group-addon bg-white">.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Jatah Cuti / Tahun</label>
                                        <input type="text" class="form-control" name="jatah_cuti" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Tanggal Mulai Kerja</label>
                                        <input type="date" class="form-control" name="tanggal_masuk" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Tanggal Berakhir</label>
                                        <input type="date" class="form-control" name="tanggal_berakhir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-3">
                                <div class="col-md-4">
                                    <label>Jenis Kelamin</label>
                                    <div class="form-grup">
                                        <select class="custom-select custom-select-lg mb-3 form-control"
                                            name="jenis_kelamin" required>
                                            <option selected> ------ Pilih Opsi ------ </option>
                                            <option value="1">Laki-Laki </option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Nomor Handphone</label>
                                        <input type="text" class="form-control" name="no_handphone" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Foto</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="foto" accept=".jpeg, .jpg, .png" required>
                                            <div class="input-group-addon bg-white">JPG, JPEG, PNG</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <strong>Akun</strong>
                            <hr>
                            <div class="row">
                                <div class="col-md 6">
                                    <div class="form-grup">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning float-right mt-4"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use App\Models\Izin;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['list_datapegawai'] = DataPegawai::all();
        return view('admin.datapegawai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        return view('admin.datapegawai.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $datapegawai = new DataPegawai;
        $datapegawai->nik = request('nik');
        $datapegawai->nama = request('nama');
        $datapegawai->no_handphone = request('no_handphone');
        $datapegawai->gaji_pokok = request('gaji_pokok');
        $datapegawai->status_kerja = request('status_kerja');
        $datapegawai->jatah_cuti = request('jatah_cuti');
        $datapegawai->tanggal_berakhir = request('tanggal_berakhir');
        $datapegawai->jam_kerja = request('jam_kerja');
        $datapegawai->jenis_kelamin = request('jenis_kelamin');
        $datapegawai->email = request('email');
        $datapegawai->divisi = request('divisi');
        $datapegawai->jabatan = request('jabatan');
        $datapegawai->tanggal_masuk = request('tanggal_masuk');
        $datapegawai->password = request('password');
        $datapegawai->foto = request('foto');
        $datapegawai->save();

        $datapegawai->handleUploadFoto();

        return redirect('admin/datapegawai')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DataPegawai $datapegawai)
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['datapegawai'] = $datapegawai;
        return view('admin.datapegawai.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPegawai $datapegawai)
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['datapegawai'] = $datapegawai;
        return view('admin.datapegawai.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataPegawai $datapegawai)
    {
        // $datapegawai->id = request()->id;
        $datapegawai->nik = request('nik');
        $datapegawai->nama = request('nama');
        $datapegawai->no_handphone = request('no_handphone');
        $datapegawai->gaji_pokok = request('gaji_pokok');
        $datapegawai->status_kerja = request('status_kerja');
        $datapegawai->jatah_cuti = request('jatah_cuti');
        $datapegawai->tanggal_berakhir = request('tanggal_berakhir');
        $datapegawai->jam_kerja = request('jam_kerja');
        $datapegawai->jenis_kelamin = request('jenis_kelamin');
        $datapegawai->email = request('email');
        $datapegawai->divisi = request('divisi');
        $datapegawai->jabatan = request('jabatan');
        $datapegawai->tanggal_masuk = request('tanggal_masuk');
        if(request('password')) $datapegawai->password = request('password');
        if(request('foto')) $datapegawai->handleUploadFoto();
        $datapegawai->save();

        $datapegawai->handleUploadFoto();
        

        return redirect('admin/datapegawai')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPegawai $datapegawai)
    {
        $datapegawai->handleDelete();
        $datapegawai->delete();

        return redirect('admin/datapegawai');
    }

    public function cetak_pdf(DataPegawai $datapegawai)
    {
        $data ['datapegawai'] = $datapegawai;
        return view('admin.datapegawai.cetak_pdf', $data);
    }
}

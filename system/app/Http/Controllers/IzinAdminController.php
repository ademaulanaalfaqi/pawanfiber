<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class IzinAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['list_izin'] = Izin::all();
        return view('admin.izin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.izin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $izin = new Izin;
        $izin->nama = request('nama');
        $izin->tanggal_pengajuan = request('tanggal_pengajuan');
        $izin->tanggal_mulai = request('tanggal_mulai');
        $izin->tanggal_selesai = request('tanggal_selesai');
        $izin->hari = request('hari');
        $izin->tipe_izin = request('tipe_izin');
        $izin->keterangan = request('keterangan');
        $izin->foto = request('foto');
        $izin->save();

        $izin->handleUploadFoto();

        return redirect('admin/izin')->with('success', 'Data berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Izin $izin)
    {
        $data ['izin'] = $izin;
        return view('admin.izin.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function setuju(Izin $izin)
    {
        $izin->status = 2;
        $izin->save();
        return back()->with('success', 'Pengajuan disetujui');
    }

    public function tolak(Izin $izin)
    {
        $izin->status = 3;
        $izin->save();
        return back()->with('success', 'Pengajuan ditolak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
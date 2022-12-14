<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class UserIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = request()->user()->id;
        $data ['list_izin'] = Izin::where('id_user', $id_user)->get();
        // $data ['list_izin'] = Izin::all();
        return view('user.izin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('user.izin.create', $data);
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
        $izin->status = 1;
        $izin->id_user = request('id_user');
        $izin->tanggal_mulai = request('tanggal_mulai');
        $izin->tanggal_selesai = request('tanggal_selesai');
        $izin->tipe_izin = request('tipe_izin');
        $izin->keterangan = request('keterangan');
        $izin->foto = request('foto');
        $izin->save();

        $izin->handleUploadFoto();

        return redirect('user/izin')->with('success', 'Data berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Izin $izin)
    {
        $data ['list_izin'] = Izin::where('id',$izin)->get();
        $data ['izin'] = $izin;
        return view('user.izin.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Izin $izin)
    {
        $data ['list_izin'] = Izin::all();
        $data ['izin'] = $izin;
        return view('user.izin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Izin $izin)
    {
        $izin->nama = request('nama');
        $izin->tanggal_mulai = request('tanggal_mulai');
        $izin->tanggal_selesai = request('tanggal_selesai');
        $izin->tipe_izin = request('tipe_izin');
        $izin->keterangan = request('keterangan');
        if(request('foto')) $izin->handleUploadFoto();
        $izin->save();

        return redirect('user/izin')->with('success', 'Data berhasil diubah');
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

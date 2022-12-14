<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use Illuminate\Http\Request;

class UserDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = request()->user()->id;
        $data ['list_dinas'] = Dinas::where('id_user', $id_user)->get();
        return view('user.dinas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.dinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dinas = new Dinas;
        $dinas->id_user = request()->user()->id;
        $dinas->nama = request('nama');
        $dinas->tanggal_mulai = request('tanggal_mulai');
        $dinas->tanggal_selesai = request('tanggal_selesai');
        $dinas->deskripsi_dinas = request('deskripsi_dinas');
        $dinas->longitude = request('longitude');
        $dinas->latitude = request('latitude');
        $dinas->save();

        return redirect('user/dinas')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dinas $dinas)
    {
        $data ['list_dinas'] = Dinas::where('id',$dinas)->get();
        $data ['dinas'] = $dinas;
        return view('user.dinas.show', $data);
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

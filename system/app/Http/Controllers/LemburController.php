<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Lembur;
use Illuminate\Http\Request;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['list_izin'] = Izin::all();
        $id_user = request()->user()->id;
        $data ['list_lembur'] = Lembur::where('id_user',$id_user)->get();
        return view('user.lembur.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.lembur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembur = new Lembur;
        $lembur->id_user = request()->user()->id;
        $lembur->nama = request()->user()->nama;
        $lembur->aktifitas = request('aktifitas');
        $lembur->lembur = 1;
        $lembur->save();

        return redirect('user/lembur')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lembur $lembur)
    {
        $data ['lembur'] = $lembur;
        return view('user.lembur.show', $data);
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

    public function selesai(Lembur $lembur)
    {
        $lembur->lembur = 2;
        $lembur->jam_pulang = request('jam_pulang');
        $lembur->save();
        return back();
    }
}

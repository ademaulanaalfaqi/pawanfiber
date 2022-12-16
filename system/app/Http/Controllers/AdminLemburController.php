<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Lembur;
use Illuminate\Http\Request;

class AdminLemburController extends Controller
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
        $data ['list_lembur'] = Lembur::all();
        return view('admin.lembur.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lembur $lembur)
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['lembur'] = $lembur;
        return view('admin.lembur.show', $data);
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
    public function destroy(Lembur $lembur)
    {
        $lembur->delete();

        return redirect('admin/lembur')->with('success', 'Data berhasil dihapus');
    }
}

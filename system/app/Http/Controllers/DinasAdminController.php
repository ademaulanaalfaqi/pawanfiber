<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\Izin;
use Illuminate\Http\Request;

class DinasAdminController extends Controller
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
        $data ['list_dinas'] = Dinas::all();
        return view('admin.dinas.index', $data);
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
    public function show(Dinas $dinas)
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['list_dinas'] = Dinas::where('id', $dinas)->get();
        $data ['dinas'] = $dinas;
        return view('admin.dinas.show', $data);
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
    public function destroy(Dinas $dinas)
    {
        $dinas->delete();

        return redirect('admin/dinas')->with('success', 'Data berhasil dihapus');
    }
}

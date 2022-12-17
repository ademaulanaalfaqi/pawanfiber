<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Absensi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['start'] = strtotime('04:00');
        $data ['end'] = strtotime('07:00');
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        // $data ['list_absensi'] = Absensi::all();
        $data ['hari_ini'] = Carbon::today()->format('d F Y');
        $data ['list_absensi'] = Absensi::whereDate('created_at', '=', Carbon::today()->toDateString())->get();
        
        return view('admin.absensi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter()
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['hari_ini'] = Carbon::today()->format('d F Y');
        $filter_tanggal = request('filter_tanggal');
        $data ['list_absensi'] = Absensi::whereDate('created_at',$filter_tanggal)->get();

        return view('admin.absensi.index', $data);
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
    public function show(Absensi $absensi)
    {
        $data ['list_izin'] = Izin::all();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['list_absensi'] = Absensi::where('id',$absensi)->get();
        $data ['absensi'] = $absensi;
        return view('admin.absensi.show', $data);
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

<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class UserAbsensiController extends Controller
{
    public function index()
    {
        $id_user = request()->user()->id;
        $data ['list_absensi'] = Absensi::where('id_user', $id_user)->get();
        return view('user.absensi.index', $data);
    }

    public function create()
    {
        return view('user.absensi.create');
    }

    public function storeAbsensi()
    {
        $absensi = new Absensi;
        $absensi->nama = request()->user()->nama;
        $absensi->id_user = request()->user()->id;   
        $absensi->latitude = request('latitude');
        $absensi->longitude = request('longitude');
        $absensi->istirahat = 1;
        $absensi->pulang = 1;
        $absensi->handleUploadFoto();
        $absensi->save();

        return redirect('user/absensi');
    }

    public function show($absensi)
    {
        $data ['list_absensi'] = Absensi::where('id',$absensi)->get();
        $data ['absensi'] = $absensi;
        return view('user.absensi.show', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function istirahat(Absensi $absensi)
    {
        $absensi->istirahat = 2;
        $absensi->jam_istirahat = request('jam_istirahat');
        $absensi->save();
        return back();
    }

    public function pulang(Absensi $absensi)
    {
        $absensi->pulang = 2;
        $absensi->jam_pulang = request('jam_pulang');
        $absensi->save();
        return back();
    }
}

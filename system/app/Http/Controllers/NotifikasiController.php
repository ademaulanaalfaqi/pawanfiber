<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\DataPegawai;
use App\Models\Dinas;
use App\Models\Izin;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        $data ['list_izin'] = Izin::all();
        $data ['list_absensi'] = Absensi::all();
        $data ['list_dinas'] = Dinas::all();
        $data ['list_datapegawai'] = DataPegawai::all();
        return view('admin.layout.header', $data);
    }
}

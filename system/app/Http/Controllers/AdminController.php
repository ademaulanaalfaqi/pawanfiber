<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function showAdmin(){
        return view('admin/base');
    }

    function showDashboard(){
        $data ['baru'] = Izin::where('status', '1')->count();
        $data ['diterima'] = Izin::where('status', '2')->count();
        $data ['ditolak'] = Izin::where('status', '3')->count();
        $data ['total'] = Izin::count();
        $data ['total_pengajuan'] = Izin::where('status', '1')->count();
        $data ['list_izin'] = Izin::all();
        return view('admin/dashboard', $data);
    }
}

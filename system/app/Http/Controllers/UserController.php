<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        return view('user/base');
    }

    function showDashboard(){
        $id_user = request()->user()->id;
        $data ['baru'] = Izin::where('id_user', $id_user)->where('status', '1')->count();
        $data ['diterima'] = Izin::where('id_user', $id_user)->where('status', '2')->count();
        $data ['ditolak'] = Izin::where('id_user', $id_user)->where('status', '3')->count();
        $data ['total'] = Izin::where('id_user', $id_user)->count();
        return view('user/dashboard', $data);
    }
}

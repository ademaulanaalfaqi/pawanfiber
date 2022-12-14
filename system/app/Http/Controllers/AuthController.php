<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
*
*/
class AuthController extends Controller
{
	public function login(){

		return view ('login');

	}

	public function LoginProses(){
		
        if (auth()->guard('pegawai')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('user/dashboard')->with('success', 'Login Berhasil');
        }

        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin/dashboard')->with('success', 'Login Berhasil');
        }

		return redirect('login');
	}

	public function logout(Request $request){
		auth()->logout();
		$request->session()->invalidate();
		return redirect('login');
	}


}

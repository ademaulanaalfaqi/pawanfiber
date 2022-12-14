<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IzinAdminController;
use App\Http\Controllers\DinasAdminController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\AbsensiAdminController;
use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\UserAbsensiController;
use App\Http\Controllers\UserDinasController;
use App\Http\Controllers\UserIzinController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth:admin')->group(function(){
    // admin
    Route::get('admin', [AdminController::class, 'showAdmin']);
    Route::get('dashboard', [AdminController::class, 'showDashboard']);

    // data pegawai
    Route::get('datapegawai', [DataPegawaiController::class, 'index']);
    Route::get('datapegawai/create', [DataPegawaiController::class, 'create']);
    Route::post('datapegawai', [DataPegawaiController::class, 'store']);
    Route::get('datapegawai/{datapegawai}', [DataPegawaiController::class, 'show']);
    Route::get('datapegawai/{datapegawai}/edit', [DataPegawaiController::class, 'edit']);
    Route::put('datapegawai/{datapegawai}', [DataPegawaiController::class, 'update']);
    Route::delete('datapegawai/{datapegawai}', [DataPegawaiController::class, 'destroy']);
    Route::get('datapegawai/{datapegawai}/cetak_pdf', [DataPegawaiController::class, 'cetak_pdf']);


    // absensi
    Route::get('absensi', [AbsensiAdminController::class, 'index']);
    Route::get('absensi/{absensi}', [UserAbsensiController::class, 'show']);

    // izin
    Route::get('izin', [IzinAdminController::class, 'index']);
    Route::get('izin/create', [IzinAdminController::class, 'create']);
    Route::post('izin', [IzinAdminController::class, 'store']);
    Route::get('izin/{izin}', [IzinAdminController::class, 'show']);

    Route::PUT('setuju/{izin}', [IzinAdminController::class, 'setuju']);
    Route::PUT('tolak/{izin}', [IzinAdminController::class, 'tolak']);

    // dinas
    Route::get('dinas', [DinasAdminController::class, 'index']);
    Route::get('dinas/{dinas}', [DinasAdminController::class, 'show']);

    // admin
    Route::get('admin', [AdminWebController::class, 'index']);
    Route::get('admin/create', [AdminWebController::class, 'create']);
    Route::post('admin', [AdminWebController::class, 'store']);
    Route::get('admin/{admin}/edit', [AdminWebController::class, 'edit']);
    Route::put('admin/{admin}', [AdminWebController::class, 'update']);
    Route::delete('admin/{admin}', [AdminWebController::class, 'destroy']);
});

Route::prefix('user')->middleware('auth:pegawai')->group(function(){
    // user
    Route::get('user', [UserController::class, 'showUser']);
    Route::get('dashboard', [UserController::class, 'showDashboard']);

    // izin
    Route::get('izin', [UserIzinController::class, 'index']);
    Route::get('izin/create', [UserIzinController::class, 'create']);
    Route::post('izin', [UserIzinController::class, 'store']);
    Route::get('izin/{izin}', [UserIzinController::class, 'show']);
    Route::get('izin/{izin}/edit', [UserIzinController::class, 'edit']);
    Route::put('izin/{izin}', [UserIzinController::class, 'update']);

    // absensi
    Route::get('absensi', [UserAbsensiController::class, 'index']);
    Route::get('absensi/create', [UserAbsensiController::class, 'create']);
    Route::post('storeAbsensi', [UserAbsensiController::class, 'storeAbsensi']);
    Route::get('absensi/masuk', [UserAbsensiController::class, 'masuk']);
    Route::get('absensi/pulang', [UserAbsensiController::class, 'pulang']);
    Route::post('absensi_masuk', [UserAbsensiController::class, 'storeMasuk']);
    Route::post('storePulang', [UserAbsensiController::class, 'storePulang']);
    Route::get('absensi/{absenMasuk}', [UserAbsensiController::class, 'show']);
    Route::put('istirahat/{absensi}', [UserAbsensiController::class, 'istirahat']);
    Route::put('pulang/{absensi}', [UserAbsensiController::class, 'pulang']);

    // lembur
    Route::get('lembur', [LemburController::class, 'index']);
    Route::get('lembur/create', [LemburController::class, 'create']);
    Route::post('lembur', [LemburController::class, 'store']);
    Route::get('lembur/{lembur}', [LemburController::class, 'show']);
    Route::put('selesai/{lembur}', [LemburController::class, 'selesai']);

    // dinnas
    Route::get('dinas', [UserDinasController::class, 'index']);
    Route::get('dinas/create', [UserDinasController::class, 'create']);
    Route::post('dinas', [UserDinasController::class, 'store']);
    Route::get('dinas/{dinas}', [UserDinasController::class, 'show']);
});


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);


Route::get('maps', function(){
    return view('maps');
});


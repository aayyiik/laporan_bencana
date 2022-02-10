<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BencanaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBencanaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\ProvinsiController;
use App\Models\Pelaporan;

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

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[AuthController::class,'logout']);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/dashboard', [DashboardController::class,'index']);
  



// ================ DASHBOARD ============== //

//Kategori Bencana//
Route::get('/kategori_bencana',[KategoriBencanaController::class,'index']);
Route::post('/kategori_bencana/create',[KategoriBencanaController::class,'create']);

//Bencana//
Route::get('/bencana',[BencanaController::class,'index']);
Route::post('/bencana/create',[BencanaController::class,'create']);

//Kota//
Route::get('/kota',[KotaController::class,'index']);
Route::post('/kota/create',[KotaController::class,'create']);

//Provinsi//
Route::get('/provinsi',[ProvinsiController::class,'index']);
Route::post('/provinsi/create',[ProvinsiController::class,'create']);

//Kecamatan//
Route::get('/kecamatan',[KecamatanController::class,'index']);
Route::post('/kecamatan/create',[KecamatanController::class,'create']);

//Pelaporan//
Route::get('/pelaporan',[PelaporanController::class,'index']);
Route::get('/pelaporan/create',[PelaporanController::class,'create']);
Route::get('petugas/status/update/{id_lapor}',[PelaporanController::class,'updateStatus']);

//Laporan Korban//
Route::get('/add/{id_lapor}',[PelaporanController::class,'add']);
Route::post('add/{id_lapor}/update',[PelaporanController::class,'add_store']);

});
});
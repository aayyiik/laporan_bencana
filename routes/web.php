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
use App\Http\Controllers\UserController;
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

Route::get('/register',[AuthController::class,'register']);
Route::post('/postregister',[AuthController::class,'postregister']);

Route::get('/dashboard', [DashboardController::class,'dashboardWarga']);

//Profil//
Route::get('profilsetting/{id_user}',[UserController::class,'editprofil'])->name('profilsetting');
Route::post('profil/update/{id_user}',[UserController::class,'updateprofil']);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/dashboard_admin', [DashboardController::class,'dashboardAdmin']);
        //Kategori Bencana//
        Route::get('/kategori_bencana',[KategoriBencanaController::class,'index']);
        Route::post('/kategori_bencana/create',[KategoriBencanaController::class,'create']);
        Route::get('/kategori/{id_kategori}/edit',[KategoriBencanaController::class,'edit']);
        Route::post('/kategori/{id_kategori}/update',[KategoriBencanaController::class,'update']);
        Route::get('/kategori/{id_kategori}/delete',[KategoriBencanaController::class,'delete']);

        //Bencana//
        Route::get('/bencana',[BencanaController::class,'index']);
        Route::post('/bencana/create',[BencanaController::class,'create']);
        Route::get('/bencana/{id_bencana}/edit',[BencanaController::class,'edit']);
        Route::post('/bencana/{id_bencana}/update',[BencanaController::class,'update']);
        Route::get('/bencana/{id_bencana}/delete',[BencanaController::class,'delete']);

        //Kota//
        Route::get('/kota',[KotaController::class,'index']);
        Route::post('/kota/create',[KotaController::class,'create']);
        Route::get('/kota/{id_kota}/edit',[KotaController::class,'edit']);
        Route::post('/kota/{id_kota}/update',[KotaController::class,'update']);
        Route::get('/kota/{id_kota}/delete',[KotaController::class,'delete']);

        //Provinsi//
        Route::get('/provinsi',[ProvinsiController::class,'index']);
        Route::post('/provinsi/create',[ProvinsiController::class,'create']);
        Route::get('/provinsi/{id_provinsi}/edit',[ProvinsiController::class,'edit']);
        Route::post('/provinsi/{id_provinsi}/update',[ProvinsiController::class,'update']);
        Route::get('/provinsi/{id_provinsi}/delete',[ProvinsiController::class,'delete']);

        //Kecamatan//
        Route::get('/kecamatan',[KecamatanController::class,'index']);
        Route::post('/kecamatan/create',[KecamatanController::class,'create']);
        Route::get('/kecamatan/{id_kecamatan}/edit',[KecamatanController::class,'edit']);
        Route::post('/kecamatan/{id_kecamatan}/update',[KecamatanController::class,'update']);
        Route::get('/kecamatan/{id_kecamatan}/delete',[KecamatanController::class,'delete']);


});


Route::group(['middleware' => ['cek_login:petugas']], function () {

    Route::get('/dashboard_petugas', [DashboardController::class,'dashboardPetugas']);

    //Laporan Korban//
    Route::get('/add/{id_lapor}',[PelaporanController::class,'add']);
    Route::post('add/{id_lapor}/update',[PelaporanController::class,'add_store']);
    Route::get('korban/{id_detail}/edit',[PelaporanController::class,'editKorban']);
    Route::post('korban/{id_detail}/update',[PelaporanController::class,'updateKorban']);
    Route::get('petugas/status/update/{id_lapor}',[PelaporanController::class,'updateStatus']);

    //rekap laporan //
    Route::get('/rekap_laporan',[PelaporanController::class,'rekap']);
    Route::get('filter-data/{tgl_awal}/{tgl_akhir}',[PelaporanController::class,'tampildata']);

});

        //Pelaporan//
        Route::get('/pelaporan',[PelaporanController::class,'index']);
        Route::get('/pelaporan/{id_user}',[PelaporanController::class,'histori']);
        Route::post('/pelaporan/create',[PelaporanController::class,'create']);
        Route::get('pelaporan/{id_lapor}/edit',[PelaporanController::class,'edit']);
        Route::post('pelaporan/{id_lapor}/update',[PelaporanController::class,'update']);
        Route::get('pelaporan/{id_lapor}/delete',[PelaporanController::class,'delete']);

        Route::get('list/{id_lapor}/korban',[PelaporanController::class,'list']);

   


});
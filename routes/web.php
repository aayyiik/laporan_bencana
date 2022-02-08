<?php

use App\Http\Controllers\BencanaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBencanaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProvinsiController;

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

Route::get('/dashboard', [DashboardController::class,'index']);

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


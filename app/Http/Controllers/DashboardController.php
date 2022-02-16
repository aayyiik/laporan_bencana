<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\DetailKorban;
use App\Models\KategoriBencana;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Pelaporan;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboardWarga(){
        return view('dashboard.index');
    }
    
    public function dashboardPetugas(){
        $lapor  = Pelaporan::count();
        $korban = DetailKorban::count();
        $luka_ringan = DetailKorban::where('kondisi','=','Luka Ringan')->get()->count();
        $luka_berat = DetailKorban::where('kondisi','=','Luka Berat')->get()->count();
        $meninggal = DetailKorban::where('kondisi','=','Meninggal')->get()->count();
        $selamat = DetailKorban::where('kondisi','=','LSelamat')->get()->count();
        return view('dashboard.petugas',compact('lapor','korban','luka_ringan','luka_berat','meninggal','selamat'));
    }

    public function dashboardAdmin(){
        $bencana  = Bencana::count();
        $kategori = KategoriBencana::count();
        $kota  = Kota::count();
        $provinsi = Provinsi::count();
        $kecamatan  = Kecamatan::count();
        return view('dashboard.admin',compact('bencana','kategori','kota','provinsi','kecamatan'));
    }
}

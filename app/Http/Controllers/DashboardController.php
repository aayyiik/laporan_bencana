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
        return view('dashboard.petugas',compact('lapor','korban'));
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

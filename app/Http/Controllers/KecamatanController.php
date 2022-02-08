<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(){
        $kecamatan = Kecamatan::all();
        $kota = Kota::all();
        return view('kecamatan.index',['kecamatan'=>$kecamatan], compact('kota'));
    }

    public function create(Request $request){

        $this->validate($request,[
            'id_kota' => 'required',
            'nama_kecamatan' => 'required|min:1|max:50',
        ]);

        Kecamatan::create($request->all());
        return redirect('/kecamatan');
    }
}

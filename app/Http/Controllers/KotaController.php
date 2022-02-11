<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        $kota = Kota::all();
        $provinsi = Provinsi::all();
        return view('kota.index',['kota'=>$kota], compact('provinsi'));
    }

    public function create(Request $request){

        $this->validate($request,[
            'id_provinsi' => 'required',
            'nama_kota' => 'required|min:1|max:50',
        ]);

        Kota::create($request->all());
        return redirect('/kota');
    }

    public function edit($id_kota){
        $kota = Kota::find($id_kota);
        $provinsi = Provinsi::all();
        return view ('kota.edit',['kota'=>$kota], compact('provinsi'));
    }

    public function update(Request $request, $id_kota){
 
            $kota = Kota::find($id_kota);
            $kota->update($request->all());
            return redirect ('/kota');
        
    }

    public function delete ($id_kota){
        $kota = Kota::find($id_kota);
        $kota->delete($kota);
        return redirect('/kota');
    }
}

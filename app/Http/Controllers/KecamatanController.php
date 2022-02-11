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

    public function edit($id_kecamatan){
        $kecamatan = Kecamatan::find($id_kecamatan);
        $kota = Kota::all();
        return view ('kecamatan.edit',['kecamatan'=>$kecamatan], compact('kota'));
    }

    public function update(Request $request, $id_kecamatan){
 
            $kecamatan = Kecamatan::find($id_kecamatan);
            $kecamatan->update($request->all());
            return redirect ('/kecamatan');
        
    }

    public function delete ($id_kecamatan){
        $kecamatan = Kecamatan::find($id_kecamatan);
        $kecamatan->delete($kecamatan);
        return redirect('/kecamatan');
    }
}

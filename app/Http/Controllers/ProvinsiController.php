<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index(){
        $provinsi = Provinsi::all();
        return view('provinsi.index',['provinsi'=>$provinsi]);
    }

    public function create(Request $request){

        $this->validate($request,[
            'nama_provinsi' => 'required|min:1|max:50',
        ]);

        Provinsi::create($request->all());
        return redirect('/provinsi');
    }


    public function edit($id_provinsi){
        $provinsi = Provinsi::find($id_provinsi);
        return view ('provinsi.edit',['provinsi'=>$provinsi]);
    }

    public function update(Request $request, $id_provinsi){
 
            $provinsi = Provinsi::find($id_provinsi);
            $provinsi->update($request->all());
            return redirect ('/provinsi');
        
    }

    public function delete ($id_provinsi){
        $provinsi = Provinsi::find($id_provinsi);
        $provinsi->delete($provinsi);
        return redirect('/provinsi');
    }
}

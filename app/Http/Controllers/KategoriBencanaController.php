<?php

namespace App\Http\Controllers;

use App\Models\KategoriBencana;
use Illuminate\Http\Request;

class KategoriBencanaController extends Controller
{
    public function index(){
        $kategori = KategoriBencana::all();
        return view ('kategori.index',['kategori'=>$kategori]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'jenis_kategori' => 'required|min:1|max:50',
        ]);
    //  dd($request->all());
        KategoriBencana::create($request->all());
        return redirect ('/kategori_bencana'); 
    }

    public function edit($id_kategori){
        $kategori = KategoriBencana::find($id_kategori);
        return view ('kategori.edit',['kategori'=>$kategori]);
    }

    public function update(Request $request, $id_kategori){
 
            $kategori = KategoriBencana::find($id_kategori);
            $kategori->update($request->all());
            return redirect ('/kategori_bencana');
        
    }

    public function delete ($id_kategori){
        $kategori = KategoriBencana::find($id_kategori);
        $kategori->delete($kategori);
        return redirect('/kategori');
    }
}

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
}

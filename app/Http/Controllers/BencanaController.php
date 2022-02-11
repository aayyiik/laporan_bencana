<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\KategoriBencana;
use Illuminate\Http\Request;

class BencanaController extends Controller
{
    public function index(){
        $bencana = Bencana::all();
        $kategori = KategoriBencana::all();
        return view('bencana.index',['bencana'=>$bencana], compact('kategori'));
    }

    public function create(Request $request){
        $this->validate($request,[
            'nama_bencana' => 'required|min:1|max:50',
        ]);
     
        Bencana::create($request->all());
        return redirect ('/bencana'); 
    }

    public function edit($id_bencana){
        $bencana = Bencana::find($id_bencana);
        $kategori = KategoriBencana::all();
        return view ('bencana.edit',['bencana'=>$bencana], compact('kategori'));
    }

    public function update(Request $request, $id_bencana){
 
            $bencana = Bencana::find($id_bencana);
            $bencana->update($request->all());
            return redirect ('/bencana');
        
    }

    public function delete ($id_bencana){
        $bencana = Bencana::find($id_bencana);
        $bencana->delete($bencana);
        return redirect('/bencana');
    }
}

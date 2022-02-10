<?php

namespace App\Http\Controllers;

use App\Models\DetailKorban;
use App\Models\Pelaporan;
use Countable;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelaporanController extends Controller
{
    public function index(){
        $lapor = Pelaporan::all();
        return view('pelaporan.index',['lapor'=>$lapor]);
    }

    public function add($id_lapor){
        $lapor = Pelaporan::find($id_lapor);
        return view('pelaporan.add', ['lapor'=>$lapor]);
    }

    public function add_store(Request $request, $id){

        // $lapor = Pelaporan::find($id);
        // $jumlah = count($request->id_lapor);
        //     for($i=0; $i< $jumlah; $i++){
        //         DetailKorban::create([
        //         'id_lapor'=> $request->id_lapor[$i],
        //         'NIK'=>$request->NIK[$i],
        //         'nama'=>$request->nama[$i],
        //         'umur'=>$request->umur[$i],
        //         'gender'=>$request->gender[$i],
        //         'kondisi'=>$request->kondisi[$i]
        //         ]);
        //     }

        
            foreach($request['NIK'] as $item => $value){
                $data2 = array(
                    'id_lapor'=>$request['id_lapor'][$item],
                    'NIK' => $request['NIK'][$item],
                    'nama'=> $request['nama'][$item],
                    'umur'=> $request['umur'][$item],
                    'gender'=> $request['gender'][$item],
                    'kondisi'=> $request['kondisi'][$item],
                );
                DetailKorban::create($data2);
            }
            return redirect('/pelaporan');
        
    }

    public function updateStatus($id_lapor){
        $lapor = Pelaporan::find($id_lapor);
        $lapor->status = 1;
        $lapor->save();
        return redirect('/pelaporan');
    }
}

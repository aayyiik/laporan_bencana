<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\DetailKorban;
use App\Models\Kecamatan;
use App\Models\Pelaporan;
use App\Models\User;
use PDF;
use Countable;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelaporanController extends Controller
{
    public function index(){
        $lapor = Pelaporan::all();
        $bencana = Bencana::all();
        $kecamatan = Kecamatan::all();
        return view('pelaporan.index',['lapor'=>$lapor], compact('bencana','kecamatan'));
    }

    public function histori($id_user){
        $bencana = Bencana::all();
        $kecamatan = Kecamatan::all();
        $lapor = Pelaporan::where('id_warga','=',Auth::user()->id_user)->get();
        return view('pelaporan.histori',['lapor'=>$lapor], compact('bencana','kecamatan'));
    }

    public function create(Request $request){
        $lapor = new Pelaporan;
        $lapor->id_warga = $request['id_warga'];
        $lapor->id_bencana = $request['id_bencana'];
        $lapor->id_kecamatan = $request['id_kecamatan'];
        $lapor->waktu = $request['waktu'];
        $lapor->status = 0;
        $lapor->save();

        return redirect('/pelaporan');

    }

    public function edit($id_lapor){
        $lapor = Pelaporan::find($id_lapor);
        $bencana = Bencana::all();
        $kecamatan = Kecamatan::all();
        return view ('pelaporan.edit',['lapor'=>$lapor],compact('bencana','kecamatan'));
    }

    public function update(Request $request, $id_lapor){
        $lapor =  Pelaporan::find($id_lapor);
        $lapor->update($request->all());
        return redirect('/pelaporan');
    }

    public function add($id_lapor){
        $lapor = Pelaporan::find($id_lapor);
        return view('pelaporan.korban.add', ['lapor'=>$lapor]);
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

    public function list($id_lapor){
        $lapor = Pelaporan::find($id_lapor);
        $detail = DetailKorban::where('id_lapor','=',$id_lapor)->get();
        return view('pelaporan.korban.list',['detail'=>$detail], compact('lapor'));
    }
    public function editKorban($id_detail){
        $korban = DetailKorban::find($id_detail);

        return view ('pelaporan.korban.edit',['korban'=>$korban]);
    }

    public function updateKorban(Request $request, $id_detail){
        $korban = DetailKorban::find($id_detail);
        $korban->update($request->all());
        return redirect('/pelaporan');
    }

    public function rekap(){
        $lapor = Pelaporan::all();
        return view ('rekap.before',['lapor'=>$lapor]);
    }

    public function tampildata($tgl_awal, $tgl_akhir){
        $lapor = Pelaporan::whereBetween('waktu',[$tgl_awal,$tgl_akhir . ' 23:59:59'])->orderBy('waktu','asc')->get();
        return view ('rekap.after',['lapor'=>$lapor]);
    }

    
}

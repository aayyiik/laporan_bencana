<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function editprofil($id_user){
        $user = User::find(Auth::user()->id_user);
     
        return view('user.profil',['user'=>$user]);
    }

    public function updateprofil(Request $request, $id_user){
        // $user = User::with(Auth::user()->id_user);
        // // $user = Auth::user();

        // // //jika user mengganti password
        // // if ($user->password != $request->password) {
        // //     $user->update([
        // //         "nama" => $request->nama,
        // //         "email" => $request->email,
        // //         "tgl_lahir" => $request->tgl_lahir,
        // //         "password" => Hash::make($request->password),
        // //         "gender" => $request->gender
        // //     ]);
        // // } else {
        // //     // Jika user tidak mengganti passwordnya

        //     $user->update([
        //         "nama" => $request->nama,
        //         "email" => $request->email,
        //         "tgl_lahir" => $request->tgl_lahir
        //     ]);
        $user = User::find(Auth::user()->id_user);
        $user->update($request->all());
        return redirect('/profilsetting/{id_user}');
    }
}



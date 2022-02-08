<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function proses_login(Request $request){
        
        $kredensil = $request->only('email','password');
            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'warga') {
                    return redirect('/dashboard');
                }elseif ($user->role == 'petugas'){ 
                    return redirect('/dashboard');
                }elseif ($user->role == 'admin') {
                    return redirect('/dashboard');
                }

                return redirect('/login')
                ->withInput()
                ->withErrors(['login_gagal'=> 'maap gan, login nya gagal.']);
            }
        }

            public function logout (Request $request){
                $request->session()->flush();
                Auth::logout();
                return redirect('/login');

            }
   
}

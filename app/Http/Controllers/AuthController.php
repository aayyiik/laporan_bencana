<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){

        // $this->validate($request, [
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        // dd($request->all());
        
        // $user = $request->only('email','password');

        //     if (Auth::attempt($user)) {
        //         $user = Auth::user();
        //         if ($user->role == 'warga') {
        //             return redirect('/dashboard');
        //         }elseif ($user->role == 'petugas') { 
        //             return redirect('/dashboard');
        //         }elseif ($user->role == 'admin') {
        //             return redirect('/dashboard');
        //         }
        //         return redirect()->intended('/');

                
        //     }

        //     return redirect('/login')
        //         ->withInput()
        //         ->withErrors(['login_gagal'=> 'maap gan, login nya gagal.']);

        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = $request->only('email','password');
        if(Auth::attempt($user)){

            $user = Auth::user();

            if($user->role == 'admin' ){
                return redirect('/dashboard');
            }elseif($user->role == 'petugas'){
                return redirect ('/dashboard');
            }

            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    
        }

            public function logout (Request $request){
                $request->session()->flush();
                Auth::logout();
                return redirect('/login');

            }
   
}

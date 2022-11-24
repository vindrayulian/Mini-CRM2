<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function login(){
        return view('login/masuk',[
            "title" => "Login"
        ]);
    }

    public function masukuser(Request $req){
        $test = Auth::attempt($req->only('email','password'));
        if($test){
            return redirect('/');
        }

        var_dump($test);

        return redirect('login');
    }

    public function regis(){
        return view('login/daftar',[
            "title" => "Regist"
        ]);
    }

    public function regisuser(Request $req){
        User::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            're_password' => bcrypt($req->repassword),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}

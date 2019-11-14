<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    //
    public function index(){
        if(session()->has('login')){
            return view('index');
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
    }

    public function home(){
        if(session()->has('login')){
            return view('index');
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
    }

    public function login_proses(Request $request){
        $username = "bic-admin";
        $password = "12345";

        if($request->username == $username && $request->password == $password){
            session()->put('name','Admin');
            session()->put('login',TRUE);
            return redirect('/bic-admin')->with('sukses','Selamat Datang di BIC Admin');
        }else{
            return redirect('/bic-admin/login')->with('gagal','Username dan Password Salah');
        }
    }

    public function login(){
        return view('login');
    }

    public function logout(){
        session()->flush();
        return redirect('/bic-admin/login')->with('alert','Kamu sudah logout');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\program;
use App\Beasiswa;
use App\Pengumuman;

class indexController extends Controller
{
    


    //
    public function index(){
        if(session()->has('login')){
            return redirect('/bic-admin');
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
    }

    public function home(){
        if(session()->has('login')){
            $program = program::where('updated_at', program::max('updated_at'))->orderBy('updated_at','desc')->get();
            $beasiswa = Beasiswa::where('updated_at', Beasiswa::max('updated_at'))->orderBy('updated_at','desc')->get();
            $pengumuman = Pengumuman::where('updated_at', Pengumuman::max('updated_at'))->orderBy('updated_at','desc')->get();
            return view('index',compact('program','beasiswa','pengumuman'));
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
        if(session()->has('login')){
            return redirect('/bic-admin');
        }
        else{
            return view('login');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/bic-admin/login')->with('alert','Kamu sudah logout');
    }
}

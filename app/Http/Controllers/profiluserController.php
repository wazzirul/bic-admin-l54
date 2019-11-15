<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil_user;
class profiluserController extends Controller
{
    //
    public function index(){

        //session login
        if(session()->has('login')){
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
        //session login

        
        
        $profiluser = Profil_user::all();
        return view('profil-user',['profiluser'=>$profiluser]);
    }
}

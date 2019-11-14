<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profiladminController extends Controller
{
    //
    public function index(){
        //session login
        if(session()->has('login')){
            
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }

        
        return view('profil-admin');
    }
    public function update_admin(){
        return view('forms/update-admin');
    }
}

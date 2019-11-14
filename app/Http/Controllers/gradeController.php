<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gradeController extends Controller
{
    //
    public function index(){
        //session login
        if(session()->has('login')){
            
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }

        
        return view('grade');
    }
    public function edit_grade(){
        return view('forms/edit-grade');
    }
    public function tambah_grade(){
        return view('forms/add-grade');
    }
}

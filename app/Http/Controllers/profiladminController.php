<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profiladminController extends Controller
{
    //
    public function index(){
        return view('profil-admin');
    }
    public function update_admin(){
        return view('forms/update-admin');
    }
}

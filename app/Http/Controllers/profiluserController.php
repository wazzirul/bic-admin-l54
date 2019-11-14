<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil_user;
class profiluserController extends Controller
{
    //
    public function index(){
        $profiluser = Profil_user::all();
        return view('profil-user',['profiluser'=>$profiluser]);
    }
}

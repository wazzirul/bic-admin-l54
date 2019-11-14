<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\program;
class test_popup extends Controller
{
    //
    public function index(){
        $program = program::all();
        return view('layout/test-popup-data',['program'=>$program]);
    }
}

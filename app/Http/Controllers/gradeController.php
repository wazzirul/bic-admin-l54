<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gradeController extends Controller
{
    //
    public function index(){
        return view('grade');
    }
    public function edit_grade(){
        return view('forms/edit-grade');
    }
    public function tambah_grade(){
        return view('forms/add-grade');
    }
}

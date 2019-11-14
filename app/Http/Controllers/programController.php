<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//table program
use App\program;

class programController extends Controller
{
    //index program
    public function index(){
        //session login
        if(session()->has('login')){
            
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }

        
        $program = program::get();
        return view('program',['program'=>$program]);
    }
    //form edit
    public function edit_program($id){
        $program = program::find($id);
        return view('forms/edit-program',['program'=>$program]);
    }
    //form tambah
    public function tambah_program(){
        return view('forms/add-program');
    }
    //store data baru
    public function store_program(Request $request){
        $this->validate($request,[
            'harga' => 'numeric|min:0',
            'dp' => 'numeric|min:0'
        ]);

        program::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'dp' => $request->dp
        ]);

        return redirect('/bic-admin/program');
    }

    //update data yang diedit
    public function update_program($id,Request $request){
        $this->validate($request,[
            'harga' => 'numeric|min:0',
            'dp' => 'numeric|min:0'
        ]);

        //dicari data yang akan diedit
        $program = program::find($id);
        //mengubah da ta
        $program->judul = $request->judul;
        $program->deskripsi = $request->deskripsi;
        $program->harga = $request->harga;
        $program->dp = $request->dp;
        //menyimpan data
        $program->save();

        return redirect('/bic-admin/program');
    }

    //soft deletes program
    public function hapus_program(Request $request){
        $program = program::find($request->id);
        $program->delete();

        return redirect('/bic-admin/program');
    }
}

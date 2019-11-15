<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class beasiswaController extends Controller
{
   


    //INDEX VIEW OF BEASISWA
    public function index(){

    //session login
    if(session()->has('login')){
    }
    else{
        return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
    }
    //session login

        $beasiswa = Beasiswa::all();
        return view('beasiswa',['beasiswa'=>$beasiswa]);
    }

    //EDIT FORM BEASISWA
    public function edit_beasiswa($id){

        //session login
        if(session()->has('login')){
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
        //session login


        $beasiswa = Beasiswa::find($id);
        return view('forms/edit-beasiswa',['beasiswa'=>$beasiswa]);
    }

    //ADD FORM BEASISWA
    public function tambah_beasiswa(){

        //session login
        if(session()->has('login')){
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
        //session login

        
        return view('forms/add-beasiswa');
    }

    //store data beasiswa baru
    public function store_beasiswa(Request $request){

        //session login
        if(session()->has('login')){
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
        //session login

        
        Beasiswa::create([
            'judul' => $request->judul,
            'subtitle' => $request->subtitle,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/bic-admin/beasiswa');
    }

    //update data beasiswa
    public function update_beasiswa($id,Request $request){

        //session login
        if(session()->has('login')){
        }
        else{
            return redirect('/bic-admin/login')->with('alert','Kamu harus login dulu');
        }
        //session login

        
        $beasiswa = Beasiswa::find($id);

        //mengupdate data
        $beasiswa->judul = $request->judul;
        $beasiswa->subtitle = $request->subtitle;
        $beasiswa->deskripsi = $request->deskripsi;
        //menyimpan data
        $beasiswa->save();

        return redirect('/bic-admin/beasiswa');
    }

    //hapus data beasiswa 
    public function hapus_beasiswa(Request $request){

        
        $beasiswa = Beasiswa::find($request->id);
        $beasiswa->delete();

        return redirect('/bic-admin/beasiswa');
    }
}

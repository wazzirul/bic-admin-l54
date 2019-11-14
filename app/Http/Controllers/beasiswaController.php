<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class beasiswaController extends Controller
{
    //
    public function index(){
        $beasiswa = Beasiswa::all();
        return view('beasiswa',['beasiswa'=>$beasiswa]);
    }
    public function edit_beasiswa($id){
        $beasiswa = Beasiswa::find($id);
        return view('forms/edit-beasiswa',['beasiswa'=>$beasiswa]);
    }
    public function tambah_beasiswa(){
        return view('forms/add-beasiswa');
    }

    //store data beasiswa baru
    public function store_beasiswa(Request $request){
        Beasiswa::create([
            'judul' => $request->judul,
            'subtitle' => $request->subtitle,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/bic-admin/beasiswa');
    }

    //update data beasiswa
    public function update_beasiswa($id,Request $request){
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

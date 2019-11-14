<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
class pengumumanController extends Controller
{
    //
    public function index(){
        $pengumuman = Pengumuman::all();
        return view("pengumuman");
    }
    public function edit_pengumuman($id){
        $pengumuman = Pengumuman::find($id);
        return view('forms/edit-pengumuman',['pengumuman'=>$pengumuman]);
    }
    public function tambah_pengumuman(){
        return view('forms/add-pengumuman');
    }
    //store pengumuman baru ke database
    public function store_pengumuman(Request $request){
        Pengumuman::create([
            'judul' => $request->judul,
            'pesan' => $request->pesan
        ]);

        return redirect('/bic-admin/pengumuman');
    }
    //update data pengumuman
    public function update_pengumuman($id,Request $request){
        $pengumuman = Pengumuman::find($id);

        $pengumuman->judul = $request->judul;
        $pengumuman->pesan = $request->pesan;
        $pengumuman->save();

        return redirect('/bic-admin/pengumuman');
    }

    //hapus data pengumuman 
    public function hapus_pengumuman(Request $request){
        $pengumuman = Pengumuman::find($request->id);
        $pengumuman->delete();

        return redirect('/bic-admin/pengumuman');
    }
}

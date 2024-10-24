<?php

namespace App\Http\Controllers;

use App\Models\MobilModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MobilController extends Controller
{
    public function TampilMobil(){
        $mobil = MobilModel::get();
        return view('mobil', compact('mobil'));
    }
    // buat view tambah
    public function AddMobil(){
        return view('tambah');
    }
    // buat nambah data pake post
    public function submit(Request $request){
        $request->validate([
            'merk_mobil' => 'required',
            'type_mobil' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images', $imagename);
        
        $mobil = new MobilModel;
        $mobil->id = $request->id;
        $mobil->merk_mobil = $request->merk_mobil;
        $mobil->type_mobil = $request->type_mobil;
        $mobil->warna = $request->warna;
        $mobil->stok = $request->stok;
        $mobil->harga = $request->harga;
        $mobil->image = $imagename;
        
        $mobil->save();
        Alert::success('Done','Berhasil Menambah Data');
        return redirect()->route('mobil');
    }

    // buat view edit, sesuai {id}
    public function edit($id){
        $mobil = MobilModel::find($id);
        return view('edit', compact('mobil'));
    }

    // ini buat logika editnya
    public function ubah(Request $request, $id){
        $request->validate([
            'merk_mobil' => 'required',
            'type_mobil' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $mobil = MobilModel::find($id);

        if($request->hasFile('image')){
            
            $imagename = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/'.$imagename);
            Storage::delete('public/images/'.$mobil->images);
            
        }

            $mobil->merk_mobil = $request->merk_mobil;
            $mobil->type_mobil = $request->type_mobil;
            $mobil->warna = $request->warna;
            $mobil->stok = $request->stok;
            $mobil->harga = $request->harga;
            $mobil->image = $imagename;       
        $mobil->save();
        Alert::success('Done','Berhasil Mengubah Data');
        return redirect()->route('mobil');
    }
    // ini buat Delete nya, sesuai {id}
    public function hapus($id){
        $mobil = MobilModel::find($id);
        $mobil->delete();
        Alert::success('Done','Berhasil Menghapus Data');
        return redirect()->route('mobil');
    }

    //ini buat detail mobilnya :v

    public function view($id){
        $mobil = MobilModel::find($id);
        return view('view', compact('mobil'));
    }

}
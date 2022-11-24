<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function company(Request $req){

        // if($req->has('search')){
        //     $data = Pekerja::where('firstnama','LIKE','%'.$req->search.'%')->paginate(10);
        // } else{ 
        //     $data = Pekerja::paginate(10);
        // }

        $isi = Perusahaan::all();
        
        return view('pages/company',compact('isi'),[
            "title" => "Company"
        ]);
    }

    public function tambahcompany(){
        return view('pages/tambahcompany',[
            "title" => "Tambah Data Company"
        ]);
    }

    public function insertcompany(Request $req){
        // dd($req->all());

        $this->validate($req,[
            'nama' => 'required|min:4|max:30',
            'email' => 'required|min:4|max:30',
            'website' => 'required|max:30',
            'logo' => 'required|file|dimensions:min_width=100,min_height=100',
        ]);

        $isi = Perusahaan::create($req->all());
        if($req->hasFile('logo')){
            $req->file('logo')->move('logoperusahaan/', $req->file('logo')->getClientOriginalName());
            $isi->logo = $req->file('logo')->getClientOriginalName();
            $isi->save();
        }

        return redirect()->route('company')->with('sukses','Data Berhasil Di Tambahkan');
    }

    public function tampilkancompany($id){
        $isi = Perusahaan::find($id);
        // dd($isi);
        return view('pages/tampilkancompany', compact('isi'),[
            "title" => "Edit Data Company"
        ]);
    }

    public function editcompany(Request $req, $id){
        $isi = Perusahaan::find($id);
        $isi->update($req->all());
        if($req->hasFile('logo')){
            $req->file('logo')->move('logoperusahaan/', $req->file('logo')->getClientOriginalName());
            $isi->logo = $req->file('logo')->getClientOriginalName();
            $isi->save();
        }
        return redirect()->route('company')->with('sukses','Data Berhasil Di Edit');
    }

    public function hapus($id){
        $isi = Perusahaan::find($id);
        $isi->delete();
        return redirect()->route('company')->with('sukses','Data Berhasil Di Hapus');
    }
}

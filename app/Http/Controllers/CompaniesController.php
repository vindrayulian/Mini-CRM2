<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CompaniesController extends Controller
{
    public function companies(Request $req){

        // if($req->has('search')){
        //     $data = Companies::where('firstnama','LIKE','%'.$req->search.'%')->paginate(10);
        //     Session::put('Halaman_url', request()->fullUrl());
        // } else{ 
        //     $data = Companies::paginate(10);
        //     Session::put('Halaman_url', request()->fullUrl());
        // }

        $data = Companies::with('perusahaans')->get();
        
        return view('pages/companies',compact('data'),[
            "title" => "Employee"
        ]);
    }

    public function tambahcompanies(){
        $isi = Perusahaan::all();
        return view('pages/tambahcompanies', compact('isi'),[
            "title" => "Tambah Data Employee"
        ]);
        // foreach($isi as $test){
        //     echo $test->name. '\n';
        // }
    }

    public function insertcompanies(Request $req){
        // dd($req->all());

        $this->validate($req,[
            'firstnama' => 'required|min:4|max:30',
            'lastnama' => 'required|min:4|max:20',
            'company_id' => 'required',
            'email' => 'required|unique:companies|min:8',
            'nohp' => 'required|min:11|max:12',
        ]);
       
        $data = $req->all();
        if(!empty($req->input('hobi'))){
            $data['hobi'] = join(',',$req->input('hobi'));
            // DB:table('companies')->insert(['hobi'=>json_encode($companies)]);
        }else{
            $companies = '';
        }
        Companies::create($data);
        return redirect()->route('companies')->with('sukses','Data Berhasil Di Tambahkan');
    }

    public function tampilkancompanies($id){
        $isi = Companies::find($id);
        // dd($data);
        $dape = Perusahaan::all();
        $isi['hobi'] = explode(',', $isi['hobi']);
        return view('pages/tampilkancompanies', compact('isi','dape'),[
            "title" => "Edit Data Employee"
        ]);

    }

    public function editcompanies(Request $req, $id){
        $data = $req->all();
        if(!empty($req->input('hobi'))){
            $data['hobi'] = join(',',$req->input('hobi'));
            // DB:table('companies')->insert(['hobi'=>json_encode($companies)]);
        }else{
            $companies = '';
        }
        $com = Companies::find($id);
        $com->update($data);
        // if(session('Halaman_url')){
        //     return redirect(session('Halaman_url'))->with('sukses','Data Berhasil Di Edit');
        // }
        // if($req->hasFile('foto')){
        //     $req->file('foto')->move('fotopekerja/', $req->file('foto')->getClientOriginalName());
        //     $data->foto = $req->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        return redirect()->route('companies')->with('sukses','Data Berhasil Di Edit');
    }

    public function delete($id){
        $data = Companies::find($id);
        $data->delete();
        return redirect()->route('companies')->with('sukses','Data Berhasil Di Hapus');
    }
}

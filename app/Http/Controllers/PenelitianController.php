<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    public function penelitian()
    {
        $penelitian = Penelitian::all();
        return view('arsip/penelitianudinus',['penelitian'=>$penelitian]);
    }
    public function pengabdian()
    {
        return view('arsip/pengabdian');
    }
    public function prosiding()
    {
        return view('arsip/prosiding');
    }
    public function tugasakhir()
    {
        return view('arsip/tugasakhir');
    }

    public function tambah()
    {
        $penelitian = Penelitian::all();
        return view('tambah',['penelitian'=>$penelitian]);
    }
    public function adddata(Request $request)
    {
        $data = Penelitian::create($request->all());
        return redirect('tambah')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function detail($id)
    {
        $penelitian = Penelitian::where('id',$id)
                    ->get();
        
        return view('arsip/detailpenelitian',['penelitian'=>$penelitian]);
    }
}

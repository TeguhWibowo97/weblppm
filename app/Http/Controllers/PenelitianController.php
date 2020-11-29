<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function penelitian()
    {
        return view('arsip/penelitianudinus');
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
}

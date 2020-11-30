<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Penelitian;
use Illuminate\Support\Collection;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function sejarahsingkat()
    {
        return view('sejarahsingkat');
    }
    public function visimisi()
    {
        return view('visimisi');
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function statistik()
    {
        $penelitian = Penelitian::all();

        $tahun = [];
        $isi = [];

        foreach($penelitian as $p)
        {
            $tahun[$p->tahun] = $p->tahun;
        }

        // dd(json_encode($tahun));

        $collection = collect($tahun);
        $sorted = $collection->sortDesc();

        return view('statistik',['tahun'=>$sorted->values()->all()]);
    }
}

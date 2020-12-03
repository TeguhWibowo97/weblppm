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
        $kategori = [];
        $fakultas = [];

        foreach($penelitian as $p)
        {
            $tahun[$p->tahun] = $p->tahun;
            $kategori['$p->kategori'] = $p->kategori;
        }
        foreach($penelitian as $p)
        {
            $fakultas[$p->fakultas] = $p->fakultas;
        }


        // dd(json_encode($tahun));

        $collection = collect($tahun);
        $sorted = $collection->sortDesc();

        // dd(json_encode($sorted));

        return view('statistik',[
            'tahun'=>$sorted->values()->all(),
            'kategori' => $kategori,
            'fakultas' => $fakultas
            ]);
    }
}

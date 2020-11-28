<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

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
        return view('statistik');
    }
}

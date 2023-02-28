<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class TampilanberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //menampilkan semua data dari model Berita
        $berita = Berita::all();
        return view('userpage.home', compact('berita'));
    }
    
    public function berita()
    {
        //menampilkan semua data dari model Berita
        $berita = Berita::all();
        return view('userpage.news', compact('berita'));
    }
}

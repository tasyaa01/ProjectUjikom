<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DetailednewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //menampilkan semua data dari model Berita
        $berita = Berita::all();
        return view('userpage.detailednews', compact('berita'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('userpage.detailednews', compact('berita'));
    }
}

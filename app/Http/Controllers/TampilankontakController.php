<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class TampilankontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Kontak
        $kontak = Kontak::all();
        return view('userpage.contact', compact('kontak'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        $kontak = new Kontak();
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;        
        $kontak->pesan = $request->pesan;
        $kontak->save();
        return view('userpage.contact');
    }
}
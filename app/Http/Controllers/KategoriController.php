<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Kategori
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namakategori' => 'required',
        ]);

        $kategori = new Kategori();
        $kategori->namakategori = $request->namakategori;
        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'namakategori' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->namakategori = $request->namakategori;
        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $kategori = kategori::find($id);
        if (!kategori::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}

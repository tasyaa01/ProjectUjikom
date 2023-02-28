<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
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
        //menampilkan semua data dari model Berita
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->subjudul = $request->subjudul;        
        $berita->isi = $request->isi;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/berita/', $name);
            $berita->foto = $name;
        }
        $berita->save();
        return redirect()->route('berita.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'isi' => 'required',
            'foto' => 'image|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->subjudul = $request->subjudul;        
        $berita->isi = $request->isi;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/berita/', $name);
            $berita->foto = $name;
        }
        $berita->save();
        return redirect()->route('berita.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $berita = berita::find($id);
        $foto = $berita->foto;

        if (!berita::destroy($id)) {
            return redirect()->back();
        }
        if ($foto) {
            $berita->deleteImage();
        }
        return redirect()->route('berita.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
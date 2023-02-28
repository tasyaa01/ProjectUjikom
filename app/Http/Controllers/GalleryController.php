<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        //menampilkan semua data dari model Gallery
        $gallery = Gallery::all();
        return view('galeri.index', compact('gallery'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|image|max:2048',
        ]);

        $gallery = new Gallery();
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/gallery/', $name);
            $gallery->foto = $name;
        }
        $gallery->save();
        return redirect()->route('galeri.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galeri.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galeri.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/gallery/', $name);
            $gallery->foto = $name;
        }
        $gallery->save();
        return redirect()->route('galeri.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $gallery = gallery::find($id);
        $foto = $gallery->foto;

        if (!gallery::destroy($id)) {
            return redirect()->back();
        }
        if ($foto) {
            $gallery->deleteImage();
        }
        return redirect()->route('galeri.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
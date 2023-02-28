<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
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
        //menampilkan semua data dari model Kontak
        $kontak = Kontak::all();
        return view('kontak.index', compact('kontak'));
    }

    public function create()
    {
        return view('kontak.create');
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
        return redirect()->route('kontak.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('kontak.show', compact('kontak'));
    }

    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('kontak.edit', compact('kontak'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;        
        $kontak->pesan = $request->pesan;
        $kontak->save();
        return redirect()->route('kontak.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $kontak = kontak::find($id);
        if (!kontak::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('kontak.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
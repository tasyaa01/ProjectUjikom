<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class TampilanaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        //menampilkan semua data dari model About
        $about = About::all();
        return view('userpage.about', compact('about'));
    }
}
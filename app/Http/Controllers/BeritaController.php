<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita Pesantren",
            "beritas" => Berita::latest()->Filter(request(['search']))->get()
        ]);
    }

    public function show(Berita $berita)
    {
        return view('blogberita', [
            "title" => "Berita",
            "post" => $berita
        ]);
    }
}

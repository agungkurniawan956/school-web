<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;

class BeritaController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' #' . $category->name;
        }

        return view('berita', [
            "title" => "Berita Pesantren" . $title,
            "active" => "Informasi",
            "beritas" => Berita::latest()->Filter(request(['search', 'category']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Berita $berita)
    {
        return view('blogberita', [
            "title" => "Berita",
            "active" => "Informasi",
            "post" => $berita
        ]);
    }
}

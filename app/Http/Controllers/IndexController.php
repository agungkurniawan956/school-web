<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Gallery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'beritas' => Berita::latest()->paginate(3),
            'agendas' => Agenda::latest()->paginate(3),
            'galleries' => Gallery::latest()->paginate(6),
            'title' => 'Islamic Boarding School'
        ]);
    }
}

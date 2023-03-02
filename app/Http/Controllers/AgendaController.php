<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return view('agenda.index', [
            'agendas' => Agenda::latest()->paginate(6),
            'title' => 'Agenda'
        ]);
    }

    public function show(Agenda $agenda)
    {
        return view('agenda.detail', [
            'title' => 'Agenda',
            'agenda' => $agenda
        ]);
    }
}

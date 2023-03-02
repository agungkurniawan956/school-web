<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.agenda.index', [
            'agendas' => Agenda::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:agendas',
            'tempat' => 'required|max:255',
            'time' => 'required|date',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('agenda-img');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Agenda::create($validatedData);

        return redirect('dashboard/agenda')->with('success', 'Berhasil Menambah Agenda Baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        return view('backend.agenda.detail', [
            'agenda' => $agenda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('backend.agenda.edit', [
            'agenda' => $agenda
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $rules = [
            'title' => 'required|max:255',
            'tempat' => 'required|max:255',
            'date' => 'required|date|date_format:Y-M-d',
            'time' => 'required|date|date_format:H:i A',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $agenda->slug) {
            $rules['slug'] = 'required|unique:agendas';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($agenda->image) {
                Storage::delete($agenda->image);
            }
            $validatedData['image'] = $request->file('image')->store('agenda-img');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Agenda::where('id', $agenda->id)
            ->update($validatedData);

        return redirect('dashboard/agenda')->with('success', 'Berhasil Update Agenda!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        if ($agenda->image) {
            Storage::delete($agenda->image);
        }
        Agenda::destroy($agenda->id);
        return redirect('dashboard/agenda')->with('success', 'Agenda Berhasil Di Hapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Agenda::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

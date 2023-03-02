<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.gallery.index', [
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
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
            'image' => 'required|image|file|max:1024'
        ]);

        $validatedData['image'] = $request->file('image')->store('gallery');
        $validatedData['user_id'] = auth()->user()->id;

        Gallery::create($validatedData);
        return redirect('dashboard/gallery')->with('success', 'Gallery Berhasil di upload!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit',[
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($gallery->image) {
                Storage::delete($gallery->image);
            }
            $validatedData['image'] = $request->file('image')->store('gallery');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Gallery::where('id', $gallery->id)
                ->update($validatedData);
        
        return redirect('/dashboard/gallery')->with('success', 'Foto Berhasil di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if($gallery->image) {
            Storage::delete($gallery->image);
        }

        Gallery::destroy($gallery->id);

        return redirect('/dashboard/gallery')->with('success', 'Gallery telah di hapus!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('backend.pages.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.gallery.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gallery')) {
            $resim = $request->file('gallery');
            $dosyadi = 'images/gallery/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/gallery'), $dosyadi);
        }
        Gallery::create([
            'images' => $dosyadi,
            'status' => $request->status
        ]);
        return back()->with('success', 'Gallery Başarıyla Eklendi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::where('id', $id)->firstOrFail();
        return view('backend.pages.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('gallery')) {
            $resim = $request->file('gallery');
            $dosyadi = 'images/gallery/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/gallery'), $dosyadi);

            Gallery::where('id', $id)->update([
                'images' => $dosyadi,
                'status' => $request->status,
            ]);
        } else {
            Gallery::where('id', $id)->update([
                'status' => $request->status,
            ]);
        }
        return back()->with('succes', 'Gallery Başarıyla GÜncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::where('id', $id)->firstOrFail();
        if (file_exists($gallery->images)) {
            if (!empty($gallery->images)) {
                unlink($gallery->images);
            }
        }
        $gallery->delete();
        return back()->with('success', 'Gallery Başarıyla Silindi');

    }
}

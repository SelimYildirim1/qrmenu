<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        return view('backend.pages.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.slider.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyadi = 'images/slider/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/slider'), $dosyadi);
        }
        Slider::create([
            'image' => $dosyadi,
            'name' => $request->name,
            'content' => $request->content,
            'status' => $request->status
        ]);
        return back()->with('success', 'Slider Başarıyla Eklendi');
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
        $slider = Slider::where('id', $id)->firstOrFail();
        return view('backend.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyadi = 'images/slider/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/slider'), $dosyadi);

            Slider::where('id', $id)->update([
                'image' => $dosyadi,
                'name' => $request->name,
                'content' => $request->content,
                'status' => $request->status,
            ]);
        } else {
            Slider::where('id', $id)->update([
                'name' => $request->name,
                'content' => $request->content,
                'status' => $request->status,
            ]);
        }
        return back()->with('succes', 'Slider Başarıyla GÜncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();
        if (file_exists($slider->image)) {
            if (!empty($slider->image)) {
                unlink($slider->image);
            }
        }
        $slider->delete();
        return back()->with('success', 'Slider Başarıyla Silindi');

    }
}

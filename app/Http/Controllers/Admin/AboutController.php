<?php

namespace App\Http\Controllers\Admin;

use App\Models\about;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = about::where('id', '1')->firstOrFail();
        return view('backend.pages.about.edit', compact('about'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyadi = 'images/about/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/about'), $dosyadi);

            About::where('id', '1')->update([
                'image' => $dosyadi,
                'title' => $request->title,
                'description' => $request->description
            ]);
        } else {
            About::where('id', '1')->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        }
        return back()->with('success','Hakkımızda Başarıyla Güncellendi');
    }
}

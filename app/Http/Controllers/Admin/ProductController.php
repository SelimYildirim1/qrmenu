<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menus;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Products::with('menus')->get();
        // foreach($menus as $menu)
        // {

        // }
        // return $menus;

        return view('backend.pages.product.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menus::all();
        return view('backend.pages.product.edit', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyadi = 'images/product/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/product'), $dosyadi);
        }
        Products::create([
            'image' => $dosyadi,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'MenuCat' => $request->MenuCat,
            'status' => $request->status
        ]);
        return back()->with('success', 'Ürün Başarıyla Eklendi');
    }


    public function edit(string $id)
    {
        $products = Products::where('id', $id)->firstOrFail();
        $menus = Menus::all();
        return view('backend.pages.product.edit', compact('products', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyadi = 'images/product/' . time() . '-' . Str::slug($request->name) . '.' . $resim->getClientOriginalExtension();
            $resim->move(public_path('images/product'), $dosyadi);
            Products::where('id', $id)->update([
                'image' => $dosyadi,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'MenuCat' => $request->MenuCat,
                'status' => $request->status
            ]);
        } else {
            Products::where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'MenuCat' => $request->MenuCat,
                'status' => $request->status
            ]);
        }
        return back()->with('success', 'Ürün Başarıyla Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::where('id', $id)->firstOrFail();
        if (file_exists($product->image)) {
            if (!empty($product->image)) {
                unlink($product->image);
            }
        }
        $product->delete();
    }
}

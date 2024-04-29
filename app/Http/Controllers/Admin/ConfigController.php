<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        $configs = Config::where('id', '1')->firstOrFail();
        return view('backend.pages.configs.edit', compact('configs'));
    }
    public function update(Request $request)
    {


        // Logo veya icon güncellenmişse
        if ($request->hasFile('logo') || $request->hasFile('icon')) {
            // Sadece logo güncellenmişse
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logopath = 'images/logo/' . time() . '-' . Str::slug($request->name) . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('images/logo'), $logopath);
            }

            // Sadece icon güncellenmişse
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconpath = 'images/logo/' . time() . '-' . Str::slug($request->name) . '.ico';

                // Dosyanın uzantısını kontrol edin ve ".ico" olarak ayarlayın
                if ($icon->getClientOriginalExtension() !== 'ico') {
                    // Eğer dosya uzantısı ".ico" değilse, ".ico" olarak değiştir
                    $iconpath = 'images/logo/' . time() . '-' . Str::slug($request->name) . '.ico';
                    $icon->move(public_path('images/logo'), $iconpath);
                }
            }
        }
        if ($request->hasFile('menu')) {
            $menu = $request->file('menu');
            $menupath = 'images/menu/' . time() . '-' . Str::slug($request->name) . '.' . $menu->getClientOriginalExtension();
            $menu->move(public_path('images/menu'), $menupath);
        }

        // Diğer alanlar için güncelleme verilerini oluştur
        $updateData = [
            'site_baslik' => $request->site_baslik,
            'site_aciklama' => $request->site_aciklama,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'baslangic_saati' => $request->baslangic_saati,
            'bitis_saati' => $request->bitis_saati,
            'harita' => $request->harita,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'adress' => $request->adress,
        ];

        // Eğer logo güncellenmişse, logo yolu güncelle
        if (isset($logopath)) {
            $updateData['logo'] = $logopath;
        }

        // Eğer icon güncellenmişse, icon yolu güncelle
        if (isset($iconpath)) {
            $updateData['icon'] = $iconpath;
        }
        // Eğer menü güncellenmişse, icon yolu güncelle
        if (isset($menupath)) {
            $updateData['menu'] = $menupath;
        }

        // Veritabanında güncelleme işlemini gerçekleştir
        Config::where('id', '1')->update($updateData);

        return back()->with('success', 'Site Ayarları Başarıyla GÜncellendi');
    }
}

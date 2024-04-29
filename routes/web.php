<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\RezervationController;


Route::group(["middleware" => ["config", "gallery"]], function () {


    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/menu', [PageController::class, 'menu'])->name('menu');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact', [PageController::class, 'saveContact'])->name('saveContact');
    Route::post('/rezervation', [PageController::class, 'rezervation'])->name('rezervation');
    Route::get('/cikis', [DashBoardController::class, 'logout'])->name('logout');

});


Route::group(["middleware" => ['auth', 'config'], 'prefix' => 'panel', 'as' => 'panel.'], function () {



    // 'auth',
    Route::get('/', [DashBoardController::class, 'index'])->name('index');

    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/ekle', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/{id}/update', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{id}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');

    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/ekle', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{id}/update', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/{id}/destroy', [MenuController::class, 'destroy'])->name('menu.destroy');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/ekle', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');


    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/ekle', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/{id}/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');


    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/rezervation', [RezervationController::class, 'index'])->name('rezervation.index');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about/edit', [AboutController::class, 'update'])->name('about.update');

    Route::get('/settings', [ConfigController::class, 'index'])->name('settings.index');
    Route::post('/settings/edit', [ConfigController::class, 'update'])->name('settings.update');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__ . '/auth.php';

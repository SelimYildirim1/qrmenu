<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index()
    {
        $configs = Config::where('id', '1')->firstOrFail();
        return view('backend.pages.configs.edit', compact('configs'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}

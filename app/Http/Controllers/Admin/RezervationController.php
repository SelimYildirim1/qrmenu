<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rezervation;
use Illuminate\Http\Request;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rezervation=Rezervation::all();
        return view('backend.pages.rezervation.index',compact('rezervation'));
    }
}

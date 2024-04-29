<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Menus;
use App\Models\Config;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Rezervation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $about = about::where('id', '1')->firstOrFail();
        $slider = Slider::where('status', '1')->get();
        return view('frontend.pages.index', compact('about', 'slider'));
    }
    public function menu()
    {
        $menus = Menus::all();
        return view('frontend.pages.menu', compact('menus'));
    }
    public function about()
    {
        $about = about::where('id', '1')->firstOrFail();
        return view('frontend.pages.about', compact('about'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function saveContact(Request $request)
    {

        $validationdata = $request->validate([
            "name" => "required|string",
            "mail" => "required|email",
            "phone" => "required|numeric",
            "message" => "required"
        ]);
        $data = $request->all();
        $data['ip'] = $request->ip();
        Contact::create($data);
        return back()->with('success', 'Başarıyla Gönderildi');
    }
    public function rezervation(Request $request)
    {
        Rezervation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'person' => $request->person,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
            'ip' => $request->ip()
        ]);
        return redirect()->back()->with('success', 'Başarıyla Gönderildi');
    }
}

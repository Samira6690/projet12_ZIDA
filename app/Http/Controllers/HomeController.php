<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;
use App\Http\Requests\AdList;
use App\Ad;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ads = Ad::all();
        return view('home' ,compact('ads'));
    }
//     public function ajout()
// {

//     return redirect()->route('home');

// }
}









    // $validated = $request->validated();

    // $ad->title = $validated["title"];
    // $ad->description = $validated["description"];
    // $ad->price = $validated["price"];
    // $ad->localisation = $validated["localisation"];




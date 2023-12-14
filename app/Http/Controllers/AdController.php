<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;
use App\Http\Requests\AdList;
use App\Ad;
class AdController extends Controller
{
 public function welcome()
    {
    $ads = Ad::all();
       return view('welcome', compact('ads'));
    }
    public function create()
    {
        return view("create");
    }
    public function store(AdStore $request)
{
    $validated = $request->validated();

    $ad = new Ad();
    $ad->title = $validated["title"];
    $ad->description = $validated["description"];
    $ad->price = $validated["price"];
    $ad->localisation = $validated["localisation"];
    $ad->save();

    return redirect()->route('welcome')->with('succes','votre annonce a été postée');

}

}

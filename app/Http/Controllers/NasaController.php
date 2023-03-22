<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NasaController extends Controller
{
    public function select()
    {
        return view('select');
    }

    public function getData()
    {
        $key = config('services.NASA.key');
        $response = json_decode(Http::get("https://api.nasa.gov/planetary/apod?api_key=$key"));
        return view('home', ['response' => $response]);
    }

    public function dateSelection(Request $request)
    {
        $date = $request->date;
        $key = config('services.NASA.key');
        $response = json_decode(Http::get("https://api.nasa.gov/planetary/apod?api_key=$key&date=$date"));
        return view('home', ['response' => $response]);
    }
}

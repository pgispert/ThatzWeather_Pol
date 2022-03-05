<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Ciudad;
use Carbon\Carbon;

class CiudadController extends Controller
{
    function guardar(Request $request) {

        $cp = $request->input("cp");
        $key = '602d49ea7d1adb1c62c473d9e031bb95';

        $response = Http::get("http://api.openweathermap.org/geo/1.0/zip?zip={$cp},ES&lang=es&appid={$key}");
        $responseJSON = $response->json();
        $lat = $responseJSON["lat"];
        $lon = $responseJSON["lon"];

        $weather = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lon}&exclude=minutely&lang=es&appid={$key}&units=metric");
        $weatherJSON = $weather->json();
        
        $ciudad = Ciudad::where('cp', $cp)->first();

        if(is_null($ciudad)) {
            $ciudad = new Ciudad;
            $ciudad->cp = $cp;
            $ciudad->nCiudad = $responseJSON["name"];
            $ciudad->dia = Carbon::now();
            $ciudad->temperatura = $weatherJSON["current"]["temp"];
            $ciudad->clima = $weatherJSON["current"]["weather"][0]["description"];
            $ciudad->save();
        } else {
            $ciudad->nCiudad = $responseJSON["name"];
            $ciudad->dia = Carbon::now();
            $ciudad->temperatura = $weatherJSON["current"]["temp"];
            $ciudad->clima = $weatherJSON["current"]["weather"][0]["description"];
            $ciudad->update();
        }

        return redirect('clima');
    }
}

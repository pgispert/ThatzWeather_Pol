<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $ciudad = 'Barcelona';
    $key = '602d49ea7d1adb1c62c473d9e031bb95';

    $response = Http::get("http://api.openweathermap.org/geo/1.0/direct?q={$ciudad}&lang=es&appid={$key}");
    $responseJSON = $response->json();
    $lat = $responseJSON[0]["lat"];
    $lon = $responseJSON[0]["lon"];

    $weather = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lon}&exclude=minutely,current&lang=es&appid={$key}&units=metric");
    dd($weather->json());


    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

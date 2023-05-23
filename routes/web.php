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
    $db = config('db');
    $card = $db['card'];
    $links = $db['links'];
    return view('home', compact('card', 'links'));
});

Route::get('/characters', function () {
    $db = config('db');
    $card = $db['card'];
    $links = $db['links'];
    return view('characters', compact('card', 'links'));
});

Route::get('/comics', function () {
    $db = config('db');
    $card = $db['card'];
    $links = $db['links'];
    return view('comics', compact('card', 'links'));
});

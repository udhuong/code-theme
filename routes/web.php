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
    return view('home');
})->name('home');
Route::get('home-desktop', function () {
    return view('home_desktop');
});
Route::get('guide', function () {
    return view('guide');
});
Route::get('spot', function () {
    return view('spot');
});
Route::get('stamps', function () {
    return view('stamp-list');
});
Route::get('stamp-get/{char}', function ($char) {
    return view('stamp-get')->with(['char' => $char]);
});
Route::get('reward', function () {
    return view('reward');
});
Route::get('reward-exchanged', function () {
    return view('reward-exchanged');
});
Route::get('prize', function () {
    return view('prize');
});
Route::get('prize-inactive', function () {
    return view('prize-inactive');
});
Route::get('award', function () {
    return view('award');
});
Route::get('form', function () {
    return view('form');
});

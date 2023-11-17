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

Route::get('/donna', function () {
    return view('donna');
})->name('donna');

Route::get('/uomo', function () {
    return view('uomo');
})->name('uomo');

Route::get('/bambino', function () {
    return view('bambino');
})->name('bambino');


// per il momento reindirizzo tutti alla home
Route::get('/info-legali', function () {
    return view('home');
})->name('info-legali');

Route::get('/info-privacy', function () {
    return view('home');
})->name('info-privacy');

Route::get('/diritto-recesso', function () {
    return view('home');
})->name('diritto-recesso');

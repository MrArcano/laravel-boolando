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

Route::get('/preferiti', function () {
    return view('preferiti');
})->name('preferiti');

// Route::get('/prodotto', function () {
//     return view('productDetails');
// })->name('prodotto');

Route::get('/prodotto/{slug}',function($slug){
    $products = config('products');

    $product = null;
    foreach ($products as $item) {
        if($item['slug'] === $slug){
            $product = $item;
        }
    }

    if($product){
        return view('productDetails',compact('product'));
    }else{
        abort(404);
    }

})->name('prodotto');

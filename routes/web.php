<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $products = DB::select('SELECT * FROM products');   
    return view('homeUsuario' , compact('products'));
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    
    return view('products');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');
Route::resource('homeUsuario', 'HomeController@index');



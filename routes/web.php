<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('shop.index');
})->name('home');

Route::get('/about-us', function () {
    return view('shop.about-us');
})->name('about');

Route::get('/products', function () {
    return view('shop.products');
})->name('products');

Route::get('/contact-us', function () {
    return view('shop.contact');
})->name('contact');

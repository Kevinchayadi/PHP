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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/home');

Route::get('/test', function () {
    return view('content.test');
});

Route::get('/home', function () {
    return view('content.home');
});

Route::get('/about-us', function () {
    return view('content.about');
});

Route::get('/our-product', function () {
    return view('content.ourProduct');
});

Route::get('/contact-us', function () {
    return view('content.Contact');
});

Route::get('/temp', function () {
    return view('content.thanks');
});

Route::get('/ayam', function () {
    return view('content.ayam');
});
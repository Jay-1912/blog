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
    return view('user-side.index');
});

Route::get('/about-us', function () {
    return view('user-side.about-us');
});

Route::get('/category', function () {
    return view('user-side.category-grid');
});

Route::get('/contact-us', function () {
    return view('user-side.contact-us');
});

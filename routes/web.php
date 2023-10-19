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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/iphone', function () {
    return view('iphone');
})->name('iphone');

Route::get('/ipad', function () {
    return view('ipad');
})->name('ipad');

Route::get('/mac', function () {
    return view('mac');
})->name('mac');

Route::get('/accessories', function () {
    return view('accessories');
})->name('accessories');



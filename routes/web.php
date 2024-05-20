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
    return view('Main.main');
})->name('main');

Route::get('about', function (){
    return view('Main.about');
})->name('about');

Route::get('user', function (){
    return view('User.user');
})->name('user');

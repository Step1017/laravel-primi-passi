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

/* 2. Aggiungo la pagina creata in views (home.blade.php) nella route '/' */
Route::get('/', function () {
    return view('home');
});

Route::get('/i', function () {
    return view('i');
});

Route::get('/am', function () {
    return view('am');
});

Route::get('/iron', function () {
    return view('iron');
});

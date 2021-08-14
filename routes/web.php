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
    $title = "SB Admin 2";
    return view('blank', ['title' => $title]);
});

Route::get('/404', function () {
    $title = "404";
    return view('404', ['title' => $title]);
});

Route::get('/blank', function () {
    $title = "Blank";
    return view('blank', ['title' => $title]);
});
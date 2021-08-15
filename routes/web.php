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

// Dashboard
Route::get('/', function () {
    $title = "SB Admin 2 - Dashboard";
    return view('index', ['title' => $title]);
});

// Components
Route::get('/buttons', function () {
    $title = "SB Admin 2 - Buttons";
    return view('buttons', ['title' => $title]);
});

Route::get('/cards', function () {
    $title = "SB Admin 2 - Cards";
    return view('cards', ['title' => $title]);
});

// Utilities
Route::get('/utilities/color', function () {
    $title = "SB Admin 2 - Color";
    return view('utilities/color', ['title' => $title]);
});

Route::get('/utilities/border', function () {
    $title = "SB Admin 2 - Border";
    return view('utilities/border', ['title' => $title]);
});

Route::get('/utilities/animation', function () {
    $title = "SB Admin 2 - Animation";
    return view('utilities/animation', ['title' => $title]);
});

Route::get('/utilities/other', function () {
    $title = "SB Admin 2 - Other";
    return view('utilities/other', ['title' => $title]);
});

// Pages
Route::get('/404', function () {
    $title = "404";
    return view('404', ['title' => $title]);
});

Route::get('/forgot-password', function () {
    $title = "Forgot Password";
    return view('forgot-password', ['title' => $title]);
});

Route::get('/login', function () {
    $title = "Login";
    return view('login', ['title' => $title]);
});

Route::get('/register', function () {
    $title = "Register";
    return view('register', ['title' => $title]);
});

Route::get('/blank', function () {
    $title = "SB Admin 2 - Blank";
    return view('blank', ['title' => $title]);
});

// Charts
Route::get('/charts', function () {
    $title = "SB Admin 2 - Charts";
    return view('charts', ['title' => $title]);
});

// Tables
Route::get('/tables', function () {
    $title = "SB Admin 2 - Tables";
    return view('tables', ['title' => $title]);
});
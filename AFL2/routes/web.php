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
    return view('index', 
    [
        "pagetitle" => "AutoSight",
        "maintitle" => " "
    ]);
});


Route::get('/service', function () {
    return view('service', 
    [
        "pagetitle" => "AutoSight",
        "maintitle" => " "
    ]);
});

Route::get('/review', function () {
    return view('review', 
    [
        "pagetitle" => "AutoSight",
        "maintitle" => " "
    ]);
});

Route::get('/about', function () {
    return view('about', 
    [
        "pagetitle" => "AutoSight",
        "maintitle" => " "
    ]);
});

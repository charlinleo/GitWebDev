<?php


use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [ServiceController::class,'ServiceHome']);

Route::get('/review', [ReviewController::class,'Review']);

Route::get('/service', [ServiceController::class,'Service']);

Route::get('/service/{service}', [ServiceController::class,'Show']);

Route::get('/showS', [ServiceController::class,'ShowHome']);

Route::get('/about', function () {
    return view('about',
    [
        "pagetitle" => "AutoSight",
        "maintitle" => "About"
    ]);
});



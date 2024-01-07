<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about',
        [
            "pagetitle" => "AutoSight",
            "maintitle" => "About"
        ]);
});

Route::resource('product', ProductController::class);

Route::group(['prefix' => 'products'], function () {
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product/create', [ProductController::class, 'create'])->name('Product.create');
    Route::post('/', [ProductController::class, 'store'])->name('Product.store');
    Route::get('{product}/edit', [ProductController::class, 'edit'])->name('Product.edit');
    Route::get('/', [ProductController::class, 'index'])->name('Product.index');
    Route::put('{product}', [ProductController::class, 'update'])->name('Product.update');
    Route::delete('{product}', [ProductController::class, 'destroy'])->name('Product.destroy');
});

Route::resource('service', ServiceController::class);

Route::group(['prefix' => 'services'], function(){
    Route::get('/service', [ServiceController::class, 'index']);
    Route::get('/service/create', [ServiceController::class, 'create'])->name('Service.create');
    Route::post('/', [ServiceController::class, 'store'])->name('Service.store');
    Route::get('{service}/edit', [ServiceController::class, 'edit'])->name('Service.edit');
    Route::put('{service}', [ServiceController::class, 'update'])->name('Service.update');
    Route::delete('{service}', [ServiceController::class, 'destroy'])->name('Service.destroy');
});

Route::resource('reservation', ReservationController::class);

Route::group(['prefix' => 'reservations'], function(){
    Route::get('/reservation', [ReservationController::class, 'index']);
    Route::get('/reservation/create', [ReservationController::class, 'create'])->name('Reservation.create');
    Route::post('/', [ReservationController::class, 'store'])->name('Reservation.store');
    Route::get('{reservation}/edit', [ReservationController::class, 'edit'])->name('Reservation.edit');
    Route::put('{reservation}', [ReservationController::class, 'update'])->name('Reservation.update');
    Route::delete('{reservation}', [ReservationController::class, 'destroy'])->name('Reservation.destroy');
});

Route::resource('review', ReviewController::class);

Route::group(['prefix' => 'reviews'], function(){
    Route::get('/review', [ReviewController::class, 'index']);
    Route::get('/review/create', [ReviewController::class, 'create'])->name('Review.create');
    Route::post('/', [ReviewController::class, 'store'])->name('Review.store');
    Route::delete('{review}', [ReviewController::class, 'destroy'])->name('Review.destroy');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

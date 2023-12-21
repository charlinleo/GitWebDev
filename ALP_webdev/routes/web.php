<?php

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

// Route::resource('products', ProductController::class);

// Route::group(['prefix' => 'products'], function () {
//     // Route for displaying the product index
//     Route::get('/', [ProductController::class, 'index'])
//         ->name('products.index');

//     // Route for displaying the create form
//     Route::get('create', [ProductController::class, 'create'])
//         ->name('products.create');

//     // Route for storing a new product
//     Route::post('/', [ProductController::class, 'store'])
//         ->name('products.store');
// });
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/', [ProductController::class, 'store'])->name('product.store');
Route::get('{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::put('{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/service', [ServiceController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

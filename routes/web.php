<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::prefix('admin')->group( function() {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'index')->name('category.index');
        Route::get('category/create', 'create')->name('category.create');
        Route::post('category', 'store')->name('category.store');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('products', 'index')->name('products.index');
        Route::get('products/create', 'create')->name('products.create');
        Route::post('products', 'store')->name('products.store');
    });
});
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);

Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){

    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/category/create',[CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store',[CategoryController::class, 'store'])->name('admin.category.store');

    Route::get('category',[CategoryController::class, 'table'])->name('admin.category.table');
    Route::post('category/{id}',[CategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('/brand/create',[BrandController::class, 'create'])->name('admin.brand.create');
    Route::post('/brand/store',[BrandController::class, 'store'])->name('admin.brand.store');

    Route::get('brand',[BrandController::class, 'table'])->name('admin.brand.table');
    Route::post('brand/{id}',[BrandController::class, 'destroy'])->name('admin.brand.destroy');

    Route::get('/products/create', [ProductController::class,'create'])->name('admin.products.create');
    Route::post('/products/store',[ProductController::class, 'store'])->name('admin.products.store');

    Route::get('products', [ProductController::class, 'table'])-> name('admin.products.table');
    Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

});

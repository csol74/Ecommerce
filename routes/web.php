<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index');                    // GET /products - Listado
    Route::get('/create', 'create');             // GET /products/create - Formulario
    Route::post('/', 'store');                   // POST /products - Guardar producto
    Route::get('/{id}/{category?}', 'show');     // GET /products/{id} - Ver detalles
    Route::get('/{id}/edit', 'edit');            // GET /products/{id}/edit - Formulario editar
    Route::put('/{id}', 'update');               // PUT /products/{id} - Actualizar
    Route::delete('/{id}', 'destroy');           // DELETE /products/{id} - Eliminar
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'welcome']);

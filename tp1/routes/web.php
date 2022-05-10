<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home']);
Route::get('about',[\App\Http\Controllers\AboutController::class, 'about']);


Route::get('productos',[\App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index');
Route::get('producto/nuevo',[\App\Http\Controllers\ProductosController::class, 'formCrear'])->name('producto.nuevo.form');
Route::post('producto/nuevo',[\App\Http\Controllers\ProductosController::class, 'grabarProducto'])->name('producto.nuevo.form');

Route::get('producto/{id}',[\App\Http\Controllers\ProductosController::class, 'ver'])->name('producto.ver');
Route::post('producto/{id}/eliminar',[\App\Http\Controllers\ProductosController::class, 'eliminar'])->name('producto.eliminar');
Route::get('producto/{id}/editar',[\App\Http\Controllers\ProductosController::class, 'editarForm'])->name('producto.editar.form');
Route::post('producto/{id}/editar',[\App\Http\Controllers\ProductosController::class, 'editarGrabar'])->name('producto.editar.grabar');

Route::get('admin/dashboard',[\App\Http\Controllers\AdminController::class, 'dashboard']);

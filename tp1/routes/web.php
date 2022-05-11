<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home']);
Route::get('about',[\App\Http\Controllers\AboutController::class, 'about']);


Route::get('productos',[\App\Http\Controllers\ProductosController::class, 'index'])
    ->name('productos.index');
Route::get('producto/nuevo',[\App\Http\Controllers\ProductosController::class, 'formCrear'])
    ->name('producto.nuevo.form')
    ->middleware(['auth']);
Route::post('producto/nuevo',[\App\Http\Controllers\ProductosController::class, 'grabarProducto'])
    ->name('producto.nuevo.form')
    ->middleware(['auth']);

Route::get('producto/{id}',[\App\Http\Controllers\ProductosController::class, 'ver'])
    ->name('producto.ver');
Route::post('producto/{id}/eliminar',[\App\Http\Controllers\ProductosController::class, 'eliminar'])
    ->name('producto.eliminar')
    ->middleware(['auth']);
Route::get('producto/{id}/editar',[\App\Http\Controllers\ProductosController::class, 'editarForm'])
    ->name('producto.editar.form')
    ->middleware(['auth']);
Route::post('producto/{id}/editar',[\App\Http\Controllers\ProductosController::class, 'editarGrabar'])
    ->name('producto.editar.grabar')
    ->middleware(['auth']);

Route::get('admin/dashboard',[\App\Http\Controllers\AdminController::class, 'dashboard'])
    ->middleware(['auth']);


Route::get('iniciar-sesion',[\App\Http\Controllers\AuthController::class,'loginFrom'])
    ->name('auth.login.form');
Route::post('iniciar-sesion',[\App\Http\Controllers\AuthController::class,'loginDo'])
    ->name('auth.login.do');
Route::post('cerrar-sesion',[\App\Http\Controllers\AuthController::class,'logout'])
    ->name('auth.logout')
    ->middleware(['auth']);

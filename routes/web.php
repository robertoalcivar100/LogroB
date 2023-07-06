<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiposProductosController;
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
    return view('welcome');
});
Route::resource('productos', ProductoController::class)->except(['index']);
Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
Route::resource('tiposproductos', TiposProductosController::class)->except(['index']);
Route::get('tiposproductos', [TiposProductosController::class, 'index'])->name('productos.index');
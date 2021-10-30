<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home/Welcome',[\App\Http\Controllers\PaginasController::class,'Welc'])->name('welcome');
Route::get('home/Colores',[\App\Http\Controllers\PaginasController::class,'colores'])->name('Colores');
Route::get('home/subir',[\App\Http\Controllers\PaginasController::class,'create'])->name('create');
Route::get('/formulario\register', [\App\Http\Controllers\PaginasController::class, 'registrar'])->name('registrar');
Route::post('/formulario',[\App\Http\Controllers\PaginasController::class,'guardar'])->name('guardar');
Route::get('/registro\colores',[\App\Http\Controllers\PaginasController::class,'colores'])->name('registrarcolor');
Route::post('/formulario\color',[\App\Http\Controllers\PaginasController::class,'guardarcolor'])->name('guardarcolor');
Route::post('/Registrarfoto', [\App\Http\Controllers\PaginasController::class, 'createfoto'])->name('registrarfoto');
Route::get('/mostrar', [\App\Http\Controllers\PaginasController::class, 'mostrar'])->name('mostrar');

Route::resource('/admin/files','Admin\FileController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

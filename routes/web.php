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

Auth::routes();
Route::resource('/materi',\App\Http\Controllers\MateriController::class);
Route::resource('/ujian', \App\Http\Controllers\UjianController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form-ujian/{id}', [\App\Http\Controllers\UjianController::class, 'ujian']);

Route::get('/score', [\App\Http\Controllers\NilaiController::class, 'index'])->name('score.index');
Route::post('/score', [\App\Http\Controllers\NilaiController::class, 'score'])->name('score');

Route::get('/murid', [\App\Http\Controllers\MuridController::class, 'index'])->name('murid.index')->middleware('is_admin');
Route::delete('/murid/{id}', [\App\Http\Controllers\MuridController::class, 'destroy'])->name('delete.murid')->middleware('is_admin');

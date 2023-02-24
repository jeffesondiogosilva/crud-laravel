<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\SeriesController;
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

Route::get('/filmes', [FilmesController::class, 'index']);

Route::prefix('jogos')->group(function () {

    Route::get('/', [JogosController::class, 'index'])->name('jogos-index'); //No uso de route se passa o método, a url, a controller, a function, nome 
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});

Route::get('/series', [SeriesController::class, 'index']);


Route::get('/produtos', function(){

    $busca = request('search');

    return view('produtos.index', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id}', function($id = null){

    return view('produtos.id', ['id' => $id]);
});

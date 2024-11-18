<?php

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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('series.index');
});

// Formas de implementar um grupo de rotas

// 1
// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/criar', 'create')->name('series.create');
//     Route::post('/series/salvar', 'store')->name('series.store');
// });

// 2
Route::resource('/series', SeriesController::class)
    ->except(['show']); // O 'show' informa para o Laravel que somente essas rotas não vão ser implementadas.
    // ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']); // O 'only' informa para o Laravel que somente essas rotas estão implementadas.

// ===

<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
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
    return redirect('/series');
});


Route::get('/series', [SeriesController::class, 'index'])
    ->name('series.index');
Route::get('/series/create', [SeriesController::class, 'create'])
    ->name('series.create');
Route::post('/series/store', [SeriesController::class, 'store'])
    ->name('series.store');
Route::get('/series/edit', [SeriesController::class, 'edit'])
    ->name('series.edit');
Route::put('/series/{series}/edit', [SeriesController::class, 'update'])
    ->name('series.update');
Route::delete('/series/{series}', [SeriesController::class, 'destroy'])
    ->name('series.destroy');
Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])
    ->name('seasons.index');











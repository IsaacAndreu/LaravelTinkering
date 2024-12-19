<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::resource('peliculas', PeliculaController::class);

Route::resource('series', SeriesController::class);

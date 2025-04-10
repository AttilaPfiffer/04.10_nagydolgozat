<?php

use App\Http\Controllers\KategoriakController;
use App\Http\Controllers\TevekenysegekController;
use App\Models\Tevekenysegek;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tevekenysegek', [TevekenysegekController::class, 'index']);
Route::delete('/tevekenyseg_torles', [TevekenysegekController::class, 'destroy'])->name('tevekenyseg_torles');
Route::post('/tevekenyseg', [TevekenysegekController::class, 'felvitel'])->name('tevekenysegek_felvitel');
Route::get('/tevekenysegek/kategoria/{id}', [TevekenysegekController::class, 'kategoriaLekres']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClanakController;

Route::get('/clanci', [ClanakController::class, 'index'])->name('clanci.index');
Route::get('/clanci/{id}', [ClanakController::class, 'show'])->name('clanci.show');



Route::get('/clanci', [ClanakController::class, 'index'])->name('clanci.index');
Route::get('/clanci/{id}', [ClanakController::class, 'show'])->name('clanci.show');

Route::get('/', function () {
    return view('welcome');
});

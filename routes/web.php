<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MapelController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sapa/{nama}', [ProfilController::class, 'sapa']);

Route::get('/halo', function () {
    return "Halo, ini adalah route pertama saya!";
});

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/mapel', [MapelController::class, 'index']);
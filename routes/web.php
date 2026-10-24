<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

Route::get('/', [HalamanController::class, 'home'])->name('home');
Route::get('/profil', [HalamanController::class, 'profil'])->name('profil');
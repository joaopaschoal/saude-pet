<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pets', App\Http\Controllers\PetController::class);
Route::resource('veterinarios', App\Http\Controllers\VeterinarioController::class);

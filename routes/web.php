<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pets', App\Http\Controllers\PetController::class)->names('pet');
Route::resource('veterinarios', App\Http\Controllers\VeterinarioController::class)->names('veterinario');

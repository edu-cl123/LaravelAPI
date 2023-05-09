<?php

use App\Http\Controllers\Api\peliculasController;
use App\Http\Controllers\Api\usuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(usuarioController::class)->group(function () {

    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'store');
    Route::get('/usuario/{id}', 'show');
    Route::get('/usuarioByuser/{username}', 'getuserbyusername');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'destroy');

});

Route::controller(peliculasController::class)->group(function () {

    Route::get('/peliculas', 'index');
    Route::post('/pelicula', 'store');
    Route::get('/pelicula/{id}', 'show');
    Route::put('/pelicula/{id}', 'update');
    Route::delete('/pelicula/{id}', 'destroy');

});
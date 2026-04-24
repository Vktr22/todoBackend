<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TevekenysegekController;
use App\Http\Controllers\KategoriakController;

/*
    get '/tevekenysegek, 
    post ’/tevekenyseg’
    delete ’/tevekenyseg/{id}’
    put ’/tevekenyseg/{id}’

*/


Route::get('/tevekenysegek', [TevekenysegekController::class, 'index']);
Route::get('/tevekenysegek/kategoria/{id}', [TevekenysegekController::class, 'byKategoriak']);

Route::post('/tevekenyseg', [TevekenysegekController::class, 'store']);
Route::put('/tevekenyseg/{id}', [TevekenysegekController::class, 'update']);
Route::delete('/tevekenyseg/{id}', [TevekenysegekController::class, 'destroy']);
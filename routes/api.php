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
Route::post('/tevekenysegek', [TevekenysegekController::class, 'create']);
Route::delete('/tevekenysegek/{id}', [TevekenysegekController::class, 'destroy']);

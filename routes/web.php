<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GeneroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('categoria')->name('categoria.')->group(function(){
    Route::get('/lista',[CategoriaController::class,'index']);
});

Route::prefix('genero')->name('genero.')->group(function(){
    Route::get('/lista',[GeneroController::class,'index']);
});

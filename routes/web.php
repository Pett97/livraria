<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('categoria')->name('categoria.')->group(function(){
    Route::get('/list',[CategoriaController::class,'index']);
});

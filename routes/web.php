<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/novo-arquivo', function () {
    return view('teste');
});*/

Route::get('/novo-arquivo',[TesteController::class,'index']);
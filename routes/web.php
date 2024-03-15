<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/novo-arquivo', function () {
    return view('teste');
});*/

Route::get('/novo-arquivo',[AlunoController::class,'index']);
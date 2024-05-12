<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[UserController::class,"create"]);
Route::get('index',[UserController::class,"index"]);

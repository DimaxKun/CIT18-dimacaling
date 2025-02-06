<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
// Route::get('/', [GreetController::class, 'index']);



Route::resource('/tasks', TaskController::class);

Route::get('/greet', [GreetController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', [GreetController::class, 'index']);

Route::get('/greet', [GreetController::class, 'index']);

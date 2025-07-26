<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Route::middleware(['auth'])->group( function () {
    // HOME
    Route::get('/home', [HomeController::class, 'home']);
    // USERS
    Route::get('/user/{id}', [UserController::class, 'getUser']);
    Route::delete('/user/{id}', [UserController::class, 'deleteUser']);
    Route::patch('/user/{id}', [UserController::class, 'update']);
});

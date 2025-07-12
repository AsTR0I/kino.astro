<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\MovieController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/admin/movies/add', [MovieController::class, 'add']),
    Route::post('/admin/movies/add', [MovieController::class, 'store']),
    Route::get('/register', action: [RegisterController::class, 'index']),
    Route::post('/register', action: [RegisterController::class, 'register']),
    Route::get('/login', action: [LoginController::class, 'index']),
    Route::post('/login', action: [LoginController::class, 'login']),
    Route::post('/logout', action: [LoginController::class, 'logout']),


];

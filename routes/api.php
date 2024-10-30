<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('user', [\App\Http\Controllers\AuthController::class, 'User']);
Route::post('register-user', [\App\Http\Controllers\AuthController::class, 'registerUser']);

Route::middleware('auth:sanctum', 'doctor')->group(function(){
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'User']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logoutUser']);
});
Route::post('login-user', [\App\Http\Controllers\AuthController::class, 'loginUser']);
Route::get('/register-doctor', [\App\Http\Controllers\AuthController::class, 'registerDoctor']);
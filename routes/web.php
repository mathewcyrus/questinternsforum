<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [AuthController::class, 'showRegistrationForm']);
Route::post('register', [AuthController::class, 'register'])->name('register');



// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('users', [UserController::class, 'index']);
//     Route::get('users/{user}', [UserController::class, 'show']);
//     Route::put('users/{user}', [UserController::class, 'update']);
//     Route::delete('users/{user}', [UserController::class, 'destroy']);
// });
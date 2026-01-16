<?php

use App\Http\Controllers\BuloController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', [BuloController::class, 'index']);
Route::post('/bulos', [BuloController::class, 'guardar']);
Route::delete('/bulos/{bulo}', [BuloController::class, 'borrar']);
Route::get('/bulos/{bulo}/edit', [BuloController::class, 'editar']);
Route::put('/bulos/{bulo}', [BuloController::class, 'actualizar']);

// Registration routes

Route::view('/register', 'auth.register')
  ->middleware('guest')
  ->name('register');



Route::post('/register', Register::class)
  ->middleware('guest');

// Login routes
Route::view('/login', 'auth.login')
  ->middleware('guest')
  ->name('login');

Route::post('/login', Login::class)
  ->middleware('guest');

// Logout route
Route::post('/logout', Logout::class)
  ->middleware('auth')
  ->name('logout');

// Protected routes
Route::middleware('auth')->group(function () {
  Route::post('/bulos', [BuloController::class, 'guardar']);
  Route::get('/bulos/{bulo}/edit', [BuloController::class, 'editar']);
  Route::put('/bulos/{bulo}', [BuloController::class, 'actualizar']);
  Route::delete('/bulos/{bulo}', [BuloController::class, 'borrar']);
});
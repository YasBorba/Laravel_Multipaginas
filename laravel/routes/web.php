<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CustomAuthController;

Route::get('/', [CustomAuthController::class, 'home'])->name('home'); // Tela 1
Route::get('/register-custom', [CustomAuthController::class, 'showRegister'])->name('register.custom'); // Tela 2
Route::post('/register-custom', [CustomAuthController::class, 'register']); // processar cadastro

// Login (Tela 3)
Route::get('/login-custom', [CustomAuthController::class, 'showLogin'])->name('login.custom');
Route::post('/login-custom', [CustomAuthController::class, 'login']);

// Tela 4
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');

// Tela 5 - Redefinir senha
Route::get('/reset-password', [CustomAuthController::class, 'showReset'])->name('password.request');
Route::post('/reset-password', [CustomAuthController::class, 'resetPassword']);



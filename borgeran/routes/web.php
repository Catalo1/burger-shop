<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('/contact', function () {
    return view('contact');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password Reset Routes (optional)
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Protected routes (add middleware to your existing routes if needed)
Route::middleware(['auth'])->group(function () {
    // Add your protected routes here
    // Example: Route::get('/dashboard', [DashboardController::class, 'index']);
});


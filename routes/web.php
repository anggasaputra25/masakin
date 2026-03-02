<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::post('/user-store', [UserController::class, 'store'])->name('user.store');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [UserController::class, 'getlogin'])->name('login');
Route::get('/checklogin', [UserController::class, 'checklogin'])->name('checklogin');
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [UserController::class, 'register'])->name('post.register');
Route::post('/login', [UserController::class, 'login'])->name('post.login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::view('/user/dashboard', 'user.dashboard')->name('user.dashboard');
});
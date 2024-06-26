<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Admin Protected Routes
Route::group(['middleware' => 'admin'], function (){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/signup', [UserController::class, 'signupFormDisplay'])->name('signup-view');
    Route::post('/register', [UserController::class, 'register'])->name('register');
});

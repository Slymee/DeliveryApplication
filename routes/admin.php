<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

//Admin Protected Routes
Route::group(['middleware' => 'admin'], function (){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});

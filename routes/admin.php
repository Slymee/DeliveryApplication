<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [\App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin-dashboard');

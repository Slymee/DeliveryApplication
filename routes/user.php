<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function (){
    return 'user';
})->name('home');


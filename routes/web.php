<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**x
 * Authentication routes
 */

Route::group(['middleware' => 'auth-protect'], function (){
    Route::get('/login', [UserController::class, 'loginFormDisplay'])->name('login-view');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

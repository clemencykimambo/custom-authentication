<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyloggedIn');

Route::get('/register', [AuthController::class, 'register'])->middleware('alreadyloggedIn');

Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [AuthController::class, 'LoginUser'])->name('login-user');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('IsloggedIn');

Route::get('/logout', [AuthController::class, 'logout']);
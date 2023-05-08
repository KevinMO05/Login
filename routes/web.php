<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'signin'])->name('login.signin');

Route::get('register', [LoginController::class, 'register'])->name('login.register');

Route::get('login/{id}', [LoginController::class, 'store'])->name('login.store');

Route::post('validation', [LoginController::class, 'validation'])->name('login.validation');

Route::post('login', [LoginController::class, 'main'])->name('login.main');








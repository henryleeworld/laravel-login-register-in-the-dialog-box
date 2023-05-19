<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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
Auth::routes(['register' => false, 'login' => false]);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('/', [HomeController::class, 'index'])->name('home');
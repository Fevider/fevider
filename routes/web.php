<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\AuthController;


// Route::middleware('guest')->group(function() {
    Route::get('/login', [MainController::class, 'login']) -> name('login');
    Route::post('/login', [AuthController::class, 'postSignin']) -> name('postSignin');
    Route::get('/registration', [MainController::class, 'registration']) -> name('registration');
    Route::post('/registration', [AuthController::class, 'postRegistration']) -> name('postRegistration');
// });

Route::get('/', [MainController::class, 'home']) -> name('home');
Route::get('/about', [MainController::class, 'about']) -> name('about');
Route::get('/form', [MainController::class, 'form']) -> name('form');
Route::post('/form/check', [MainController::class, 'form_check']) -> name('form_check');
<?php

use App\Http\Controllers\CarCheckController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.userForm');
});
Route::get('/registration', function () {
    return view('user.userRegistration');
});

Route::post('/register', RegisterController::class . '@register')->name('register');

Route::post('/result', CarCheckController::class . '@userResult')->name('result');


Route::resource('cars', CarController::class);

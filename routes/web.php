<?php

use App\Http\Controllers\CarCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.userForm');
});


Route::post('/result', CarCheckController::class . '@userResult')->name('result');

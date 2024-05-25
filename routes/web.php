<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserController;

//its a Reverse route concept
Route::get('/', function () {
    return view('login');
})->name('loginroute');



Route::get('/register', function () {
    return view('register');
})->name('registerroute');


Route::resource('user',CustomUserController::class);
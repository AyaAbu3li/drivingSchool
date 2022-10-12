<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FallbackController;



Route::get('/', function () {
    return view('userout/welcome');
});

Route::get('/in', function () {
    return view('in/home');
});

Route::get('/about',[aboutController::class,'index']);
Route::get('/courses',[coursesController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/signup',[signupController::class,'index']);
Route::get('/contact',[contactController::class,'index']);

// Fallback Route
Route::fallback(FallbackController::class);
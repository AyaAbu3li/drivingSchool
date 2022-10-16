<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\LogoutController;


Route::get('/', function () {
    return view('userout/welcome');
});

Route::get('/in', function () {
    return view('in/home');
});

Route::get('/signsAndSignals', function () {
    return view('in/signsAndSignals');
});
Route::get('/Book', function () {
    return view('in/Book');
});

Route::get('/roadsafety', function () {
    return view('in/roadsafety');
});

Route::get('/exams', function () {
    return view('in/exams');
});


Route::get('/about',[aboutController::class,'index']);
Route::get('/courses',[coursesController::class,'index']);

Route::get('/login',[LoginController::class,'index']);
Route::post('login',[LoginController::class,'login'])->name('login');

Route::get('/signup',[signupController::class,'index']);
Route::post('signup',[signupController::class,'create'])->name('signup');


Route::get('/contact',[contactController::class,'index']);
Route::post('contact',[contactController::class,'sendEmail'])->name('contact');

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

// Fallback Route
Route::fallback(FallbackController::class);
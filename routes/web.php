<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FallbackController;

use App\Http\Controllers\Auth\AuthController;


// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('dashboard', [AuthController::class, 'dashboard']); 
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');



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

// Fallback Route
Route::fallback(FallbackController::class);
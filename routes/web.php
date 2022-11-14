<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\forgetPasswordController;
use App\Http\Controllers\signsAndSignalsController;
use App\Http\Controllers\ExamsController;

Route::get('/', function () {
    return view('userout/welcome');
});

Route::get('/in', function () {
    return view('in/home');
});

Route::get('/signsAndSignals',[signsAndSignalsController::class,'index']);
Route::get('/exams',[ExamsController::class,'index']);
Route::post('exam',[ExamsController::class,'exam'])->name('exam');

// Route::get('/exam',[ExamsController::class,'exam']);



Route::get('/Book', function () {
    return view('in/Book');
});

Route::get('/roadsafety', function () {
    return view('in/roadsafety');
});



Route::get('/forgetPassword1',[forgetPasswordController::class,'index']);
Route::post('forgetPass',[forgetPasswordController::class,'forgetPass'])->name('forgetPass');

// Route::get('/forgetPassword2',[forgetPasswordController::class,'index2']);
// Route::post('checkCode',[forgetPasswordController::class,'checkCode'])->name('checkCode');

Route::get('/forgetPassword3',[forgetPasswordController::class,'index3']);
Route::post('resetpassword',[forgetPasswordController::class,'resetpassword'])->name('resetpassword');

Route::get('/forgetPassword3',[forgetPasswordController::class,'index3']);
Route::post('resetpassword',[forgetPasswordController::class,'resetpassword'])->name('resetpassword');


Route::get('/about',[aboutController::class,'index']);
Route::get('/courses',[coursesController::class,'index']);

Route::get('/login',[UserController::class,'signin']);
Route::post('login',[UserController::class,'login'])->name('login');

Route::get('/signup',[UserController::class,'signup']);
Route::post('signup',[UserController::class,'create'])->name('signup');


Route::get('/contact',[contactController::class,'index']);
Route::post('contact',[contactController::class,'sendEmail'])->name('contact');

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

// Fallback Route
Route::fallback(FallbackController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\forgetPasswordController;
use App\Http\Controllers\signsAndSignalsController;
use App\Http\Controllers\ExamsController;

Route::get('/', function () {
    return view('userout/welcome');
});

Route::get('/in',[UserController::class,'protect']);

Route::get('/signsAndSignals',[signsAndSignalsController::class,'index']);
Route::get('/exams',[ExamsController::class,'index']);
Route::post('exam',[ExamsController::class,'exam'])->name('exam');


Route::get('/Book', function () {
    if(session()->get('user_id')== ""){
        return redirect('/login');
    } else{
    return view('in/Book');
    }
});

Route::get('/roadsafety', function () {
    if(session()->get('user_id')== ""){
        return redirect('/login');
    } else{
        return view('in/roadsafety');
    }
});


Route::get('/forgetPassword1',[forgetPasswordController::class,'index']);
Route::post('forgetPass',[forgetPasswordController::class,'forgetPass'])->name('forgetPass');

// Route::get('/forgetPassword2',[forgetPasswordController::class,'index2']);
// Route::post('checkCode',[forgetPasswordController::class,'checkCode'])->name('checkCode');

Route::get('/forgetPassword3',[forgetPasswordController::class,'index3']);
Route::post('resetpassword',[forgetPasswordController::class,'resetpassword'])->name('resetpassword');

Route::get('/forgetPassword3',[forgetPasswordController::class,'index3']);
Route::post('resetpassword',[forgetPasswordController::class,'resetpassword'])->name('resetpassword');


Route::get('/about',[UserController::class,'about']);
Route::get('/courses',[UserController::class,'courses']);

Route::get('/login',[UserController::class,'signin']);
Route::post('login',[UserController::class,'login'])->name('login');

Route::get('/signup',[UserController::class,'signup']);
Route::post('signup',[UserController::class,'create'])->name('signup');


Route::get('/contact',[UserController::class,'contact']);
Route::post('contact',[UserController::class,'sendEmail'])->name('contact');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Fallback Route
Route::fallback(FallbackController::class);
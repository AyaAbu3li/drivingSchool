<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FallbackController;
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
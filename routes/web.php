<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\AddCoursesController;
use App\Http\Controllers\AddquestionController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\forgetPasswordController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\signsAndSignalsController;
use App\Http\Controllers\StudentsController;

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

Route::get('/homeAdmin', function () {
    return view('admin/homeAdmin');
});

Route::get('/addEmployee', function () {
    return view('admin/addEmployee');
});
Route::get('/addQuestion', function () {
    return view('admin/addQuestion');
});

Route::get('/', [AddquestionController::class,'AddQuestion']);
Route::post('addquestion', [AddquestionController::class,'DataInsert']);

Route::get('/questionList', function () {
    return view('admin/questionList');
});


Route::get('/', [AddCoursesController::class,'AddCourses']);
Route::post('addcourse', [AddCoursesController::class,'DataInsert']);

Route::get('/addCourses', function () {
    return view('admin/addCourses');
});

Route::get('/addSign', function () {
    return view('admin/addSign');
});

Route::get('/teams', function () {
    return view('admin/teams');
});
Route::get("/", [EmployeeController::class,'AddEmployee']);
Route::post('addemployee', [EmployeeController::class,'DataInsert']);

Route::get("/", [signsAndSignalsController::class,'AddSign']);
Route::post('addsign', [signsAndSignalsController::class,'DataInsert']);
//Route::resource("/addemployee", EmployeeController::class);

Route::get('/students', function () {
    return view('admin/students');
}); 



Route::get('/teams',[EmployeeController::class,'show']);

Route::get('/students',[StudentsController::class,'show']);

Route::get('/allCourses',[coursesController::class,'show']);

Route::get('/questionList',[AddquestionController::class,'show']);

Route::get('/addQuestion',[AddquestionController::class,'index']);

Route::get('/addSign',[signsAndSignalsController::class,'signs']);

Route::controller(\App\Http\Controllers\AddquestionController::class)->group(function () {
   Route::get('/','index');
    Route::delete('/delete-q/{item_id}', 'destroy');
});



Route::group(['prefix' => '/admin'],function () {
    // echo "<pre>";
    // print('cvvx');
    // exit;
    Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
        Route::get('/','index')->name('admin_home');
    });
});

// Route::group(['prefix' => '/admin', 'middleware' => ['Admin ']], function () {
//     Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
//         Route::get('/', 'home')->name('admin_home');
//     });
// });

Route::get('/forgetPassword1',[forgetPasswordController::class,'index']);
Route::post('forgetPass',[forgetPasswordController::class,'forgetPass'])->name('forgetPass');
Route::post('forgetPass2',[forgetPasswordController::class,'checkCode'])->name('forgetPass2');
Route::post('resetpassword',[forgetPasswordController::class,'resetpassword'])->name('resetpassword');


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
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

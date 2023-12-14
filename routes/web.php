<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;


Route::get('/', function () {
    return view('Loginform');
});
Route::post('/form-submit',[formController::class,'store'])->name('submit');
Route::post('/add-student-details',[formController::class,'add_student_details'])->name('add-student-details');
Route::get('/forgot-password',function(){
    return view('forgotPassword');
})->name('forgotPassword');

Route::post('/',[formController::class,'check_user'])->name('check_user');

Route::get('/register',function(){      
    return view('register');
})->name('register');
Route::get('/login',function(){
    return view('Loginform');
})->name('Loginform');

Route::post('/register',[formController::class,'register'])->name('register');
Route::get('/index',function(){
    return view('home');
})->name('index');
Route::get('/logout',[formController::class,'logout'])->name('logout');
Route::get('/show-students',[formController::class,'show_students'])->name('show-students');
Route::get('/get_student',[formController::class,'get_student'])->name('get_student');
Route::post('/update_students',[formController::class,'updateStudent'])->name('update_students');

Route::get('/delete_student',[formController::class,'delete_student'])->name('delete_student');



Route::get('/add-student',function(){return view('add-student');})->name('add-student');

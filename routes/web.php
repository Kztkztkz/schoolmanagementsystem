<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassitemController;
use App\Http\Controllers\SchedulerController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ SchedulerController::class , 'index'])->name('schdeuler.index');
Route::get('/nextMonth/{from}' , [ SchedulerController::class , 'nextMonth' ])->name('schedular.nextMonth');
Route::get('/preMonth/{from}' , [ SchedulerController::class , 'preMonth' ])->name('schedular.preMonth');


Route::get('/login',function(){
    return view('auth.login');
})->name('auth.login');

Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

Route::get('/forgot-password',[UserController::class,'forgetpwdview'])->name('user.forgetpwdview');
Route::post('/forgot-password',[UserController::class,'forgetpwd'])->name('user.forgetpwd');
Route::get('/reset-password/{token}',[UserController::class,'resetpwd'])->name('user.resetpwd');
Route::post('/reset-password',[UserController::class,'postresetpwd'])->name('user.postresetpwd');

Route::resource('user', UserController::class);
Route::get('payment/paid/{id}',[PaymentController::class,'paid'])->name('payment.paid');
// Route::get('payment/{name}/{course}',[PaymentController::class,'paymentAll'])->name('payment.one');

Route::resource('payment' , PaymentController::class);

Route::resource('room' , RoomController::class);
Route::resource('course' , CourseController::class);
Route::resource('student' , StudentController::class);
Route::resource('classitem' , ClassitemController::class);

Route::get('student/{student}' , [ StudentController::class , 'relatedPayment' ])->name("student.relatedPayment");
Route::get('student/{student}/class' , [ StudentController::class , 'relatedClass' ])->name("student.relatedClass");

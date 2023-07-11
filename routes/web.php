<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
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

Route::get('/',function(){
    return view('scheduler.index');
});

Route::resource('user', UserController::class);
Route::resource('payment' , PaymentController::class);
Route::resource('room' , RoomController::class);
Route::resource('course' , CourseController::class);
Route::resource('student' , StudentController::class);

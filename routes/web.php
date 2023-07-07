<?php

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
    return view('scheduler.scheduler');
});

Route::resource('/class','App\Http\Controllers\ClassController');

Route::resource('/course','App\Http\Controllers\CourseController');

Route::resource('/student','App\Http\Controllers\StudentController');

Route::resource('/payment','App\Http\Controllers\PaymentController');

Route::resource('/lecturer','App\Http\Controllers\LecturerController');

Route::resource('/lecturer','App\Http\Controllers\LecturerController');

Route::resource('/room', 'App\Http\Controllers\RoomController');
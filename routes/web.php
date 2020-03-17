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

//index
Route::get('/', 'ControllerHome@home')->name('homepage');
Route::get('/privacy', 'ControllerHome@privacy')->name('homepage.privacy');
Route::get('/faq', 'ControllerHome@faq')->name('homepage.faq');

//students
Route::get('/student', 'ControllerStudent@index')->name('student.index');
Route::get('/student/show/{id}', 'ControllerStudent@show')->name('student.show');
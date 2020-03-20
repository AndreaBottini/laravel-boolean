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
Route::get('/', 'ControllerHome@home')->name('homepage.homepage');
Route::get('/privacy', 'ControllerHome@privacy')->name('homepage.privacy');
Route::get('/faq', 'ControllerHome@faq')->name('homepage.faq');

//students
Route::get('/students', 'ControllerStudent@index')->name('students.index');
Route::get('/students/show/{id}', 'ControllerStudent@show')->name('students.show');

//callDB
Route::get('/students/db', 'ControllerStudent@dbcall')->name('students.db');

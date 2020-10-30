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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/classes', function () {
    return view('classes');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/students', 'StudentController@index')->name('students');

Route::middleware(['auth:sanctum', 'verified'])->get('/videos', 'VideoController@index')->name('videos');

Route::middleware(['auth:sanctum', 'verified'])->get('/disciplines', 'DisciplineController@index')->name('disciplines');

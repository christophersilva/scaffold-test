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

Route::middleware(['auth:sanctum', 'verified'])->get('/', 'HomeController@index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/classes', function () {
    return view('classes');
});

Route::middleware(['auth:sanctum', 'verified', 'can:viewAny,App\Models\Student'])
    ->get('/students', 'StudentController@index')
    ->name('students');

Route::middleware(['auth:sanctum', 'verified', 'can:viewAny,App\Models\Video'])
    ->get('/videos', 'VideoController@index')
    ->name('videos');

Route::middleware(['auth:sanctum', 'verified', 'can:create,App\Models\Video'])
    ->get('/videos/new', 'VideoController@create')
    ->name('new-video');

Route::middleware(['auth:sanctum', 'verified', 'can:create,App\Models\Video'])
    ->post('/videos/store', 'VideoController@store')
    ->name('create-video');

Route::middleware(['auth:sanctum', 'verified', 'can:update,video'])
    ->get('/video/{video}/edit', 'VideoController@edit')
    ->name('edit-video');

Route::middleware(['auth:sanctum', 'verified', 'can:update,video'])
    ->put('/video/{video}', 'VideoController@update')
    ->name('update-video');


Route::middleware(['auth:sanctum', 'verified', 'can:viewAny,App\Models\Discipline'])
    ->get('/disciplines', 'DisciplineController@index')
    ->name('disciplines');

Route::middleware(['auth:sanctum', 'verified', 'can:create,App\Models\Discipline'])
    ->get('/disciplines/new', 'DisciplineController@create')
    ->name('new-discipline');

Route::middleware(['auth:sanctum', 'verified', 'can:create,App\Models\Discipline'])
    ->post('/disciplines/store', 'DisciplineController@store')
    ->name('create-discipline');

Route::middleware(['auth:sanctum', 'verified', 'can:update,discipline'])
    ->get('/disciplines/{discipline}/edit', 'DisciplineController@edit')
    ->name('edit-discipline');

Route::middleware(['auth:sanctum', 'verified', 'can:update,discipline'])
    ->put('/disciplines/{discipline}', 'DisciplineController@update')
    ->name('update-discipline');

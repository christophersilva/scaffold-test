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
Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/students', 'StudentController@index')->name('students')->middleware('can:viewAny,App\Models\Student');

    Route::group(['prefix' => '/videos'], function(){
        Route::get('/', 'VideoController@index')->name('videos')->middleware('can:viewAny,App\Models\Video');
        Route::get('/new', 'VideoController@create')->name('new-video')->middleware('can:create,App\Models\Video');
        Route::post('/store', 'VideoController@store')->name('create-video')->middleware('can:create,App\Models\Video');
        Route::get('/{video}/edit', 'VideoController@edit')->name('edit-video')->middleware('can:update,video');
        Route::put('/{video}', 'VideoController@update')->name('update-video')->middleware('can:update,video');    
        Route::delete('/{video}', 'VideoController@destroy')->name('delete-video')->middleware('can:delete,video');
    });

    Route::group(['prefix' => '/disciplines'], function(){
        Route::get('/', 'DisciplineController@index')->name('disciplines')->middleware('can:viewAny,App\Models\Discipline');
        Route::get('/new', 'DisciplineController@create')->name('new-discipline')->middleware('can:create,App\Models\Discipline');
        Route::post('/store', 'DisciplineController@store')->name('create-discipline')->middleware('can:create,App\Models\Discipline');
        Route::get('/{discipline}/edit', 'DisciplineController@edit')->name('edit-discipline')->middleware('can:update,discipline');
        Route::put('/{discipline}', 'DisciplineController@update')->name('update-discipline')->middleware('can:update,discipline');
    });
});



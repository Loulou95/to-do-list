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


Route::group(['namespace' => 'Task'], function () {
    Route::post('/delete-task/{id}', 'TaskController@delete');
    Route::post('/update-task/{id}', 'TaskController@update');
    Route::get('/', 'TaskController@index');
    Route::post('store', 'TaskController@store');
});



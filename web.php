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

Route::get('/', function () {
    return view('welcome');
});

Route::get('create','userController@create');
Route::post('store','userController@store');

//Route::get('profile','userController@index');

Route::get('student','userController@index');
Route::get('edit/{id}','userController@edit');
Route::post('update','userController@update');
Route::get('delete/{id}','userController@delete');


<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/trainings', 'TrainingController@index')->name('trainings');

Route::get('/create/trainings', 'TrainingController@create')->name('create.training');

Route::post('/trainings', 'TrainingController@store')->name('store.training');

Route::get('/users', 'UserController@index')->name('users');

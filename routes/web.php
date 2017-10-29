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
//social login
Route::get('/auth/{provider}', 'Auth\Auth');

Route::get('/edit_profile', 'UserController@editUser')->name('edit.user');
Route::post('/edit_profile', 'UserController@updateUser')->name('update.user');
Route::post('/check_availability', 'UserController@checkUsername')->name('check.username');

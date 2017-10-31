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
})->name('index');

Auth::routes();

//Route::post('/login', 'Auth\LoginController@authenticate')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
//social login
Route::get('/auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/edit_profile', 'UserController@editUser')->name('edit.user');
Route::post('/edit_profile', 'UserController@updateUser')->name('update.user');
Route::post('/check_availability', 'UserController@checkUsername')->name('check.username');

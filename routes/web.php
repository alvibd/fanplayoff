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
Route::get('/everything', 'Controller@everythingAllowed');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/check_availability', 'UserController@checkUsername')->name('check.username');
//social login
Route::get('/auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::middleware('auth')->group(function (){
    Route::get('/edit_profile', 'UserController@editUser')->name('edit.user');
    Route::post('/edit_profile', 'UserController@updateUser')->name('update.user');
    Route::get('/show_profile', 'UserController@showProfile')->name('show.profile');

    Route::view('/mail_league', 'email_league')->name('mail.league');

    Route::get('/join_league', 'LeagueController@showLeagues')->name('join.league');
    Route::post('/join_league', 'TeamController@joinLeague')->name('store.team');

    Route::view('/manager', 'manager')->name('manage');
    Route::view('/message', 'message_board')->name('message');

    //Newly Added
    Route::view('/team', 'team')->name('team');
    Route::view('/draft', 'draft')->name('draft');
    Route::view('/settings', 'settings')->name('draft');

    Route::get('/create_league', 'LeagueController@createLeague')->name('create.league');
    Route::post('/create_league', 'LeagueController@storeLeague')->name('store.league');
    Route::get('/league_home/{id}', 'LeagueController@showLeague')->name('league.home');

    Route::get('/{team}/team_roster', 'TeamController@showTeamInfo')->name('team.roster');
});

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

Route::get('/about', "HomeController@About")->name('about')->middleware('guest');
Route::get('/btu/{id}', 'HomeController@getPage')->name('btu')->middleware('auth');
Route::get('/btu', 'HomeController@LogIn')->name('btu_login')->middleware('auth');
Route::post('/logout', "HomeController@Logout")->name('custom.logout');

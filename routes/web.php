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
    return view('upben.create');
});

Route::resource('upben', 'UpbenController');
Route::get('export', 'UpbenController@export')->name('exportUpben');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

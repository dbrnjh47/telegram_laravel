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

// Route::get('/', 'Page@home')->name('login');


Route::group(['prefix' => '/telegram'], function () {
	Route::get('/index', 'TelegramController@index');
	Route::any('/handling_user_messages', 'TelegramController@index');
});
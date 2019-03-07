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

Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');

Route::get('/product', 'PageController@product')->name('product');
Route::get('/portfolio', 'PageController@portfolio')->name('portfolio');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/startaproject', 'PageController@startaproject')->name('startaproject');

Route::post('/postenq', 'PageController@postenq');

Route::group(['prefix'=>'services'],function ()
{
	Route::get('/commercial', 'PageController@commercial')->name('commercial');
	Route::get('/residential', 'PageController@residential')->name('residential');
	Route::get('/architecture', 'PageController@architecture')->name('architecture');
	Route::get('/projectmanagement', 'PageController@projectmanagement')->name('projectmanagement');
});
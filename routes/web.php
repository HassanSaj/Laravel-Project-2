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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('create');
Route::post('/store', 'HomeController@store')->name('store');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/update', 'HomeController@update')->name('update');
Route::any('/search', 'HomeController@search')->name('search');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete');


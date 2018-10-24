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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/profile', 'PagesController@profile');
Route::get('/admin', 'PagesController@admin');
Route::get('/admin/track', 'PagesController@admintrack');

Route::resource('martyrs', 'MartyrsController');
Route::resource('transactions', 'TransactionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

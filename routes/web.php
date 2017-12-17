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

Route::get('/', 'PostController@index');
Route::get('/about', 'PageController@about');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/profile', 'DashboardController@profile');
Route::get('/profile/edit', 'DashboardController@edit');
Route::put('/profile/edit', 'DashboardController@update');
Route::get('/profile/passwordreset', 'DashboardController@editPassword');
Route::put('/profile/passwordreset', 'DashboardController@updatePassword');

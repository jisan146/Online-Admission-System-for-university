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

Route::get('/', 'PagesController@index');
Route::get('/oan/{id}', 'PagesController@oan');
Route::post('/oan/{id}', 'PagesController@oan');
Route::get('/oas', 'PagesController@oas');
Route::post('/oas', 'PagesController@oas');
Route::get('/email', 'PagesController@emails');
Route::get('/cfv', 'PagesController@cfv');
Route::post('/cfv', 'PagesController@cfv');
Route::get('/cfe', 'PagesController@cfe');
Route::post('/cfe', 'PagesController@cfr');
Route::get('/cfl', 'PagesController@cfl');
Route::post('/cfl', 'PagesController@cfl');
Route::get('/dr', 'PagesController@dr');
Route::post('/dr', 'PagesController@dr');
Route::get('/drl', 'PagesController@drl');
Route::post('/drl', 'PagesController@drl');
Route::get('/pr', 'PagesController@pr');
Route::post('/pr', 'PagesController@pr');
Route::get('/prl', 'PagesController@prl');
Route::post('/prl', 'PagesController@prl');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('/home', 'HomeController@index')->name('home');




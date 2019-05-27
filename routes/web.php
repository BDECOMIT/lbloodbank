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
    return view('/welcome/index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@getRegister')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('user', 'UserController');
Route::resource('companies', 'CompaniesController');
Route::get('/getCity', 'DonarsController@getCity')->name('getCity');
Route::get('/getLocation', 'DonarsController@getLocation')->name('getLocation');
Route::get('register', 'DonarsController@index')->name('register');
Route::get('welcome', 'WelcomeController@index')->name('welcome');
Route::post('register', 'DonarsController@create');
Route::resource('register-donar', 'DonarsController');
Route::resource('welcome-donar', 'WelcomeController');
Route::get('/getBlood', 'WelcomeController@getBloodGroups')->name('getBlood');
Route::get('/selectCity', 'WelcomeController@getCity')->name('selectCity');
Route::get('/selectCountry', 'WelcomeController@getCountry')->name('selectCountry');



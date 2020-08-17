<?php

use Illuminate\Support\Facades\Route;

Route::get('contact', 'ContactController@form')->name('contact');
Route::post('contact', 'ContactController@send');
Route::get('welcome', 'WelcomeController')->name('welcome');
Route::post('locale', 'LocaleController')->name('locale');

Route::group(['middleware' => ['guest']], function() {
  Route::get('forgot-password', 'ForgotPasswordController@form')->name('forgot-password');
  Route::post('forgot-password', 'ForgotPasswordController@send');
  Route::get('login', 'LoginController@form')->name('login');
  Route::post('login', 'LoginController@login');
  Route::get('register', 'RegisterController@form')->name('register');
  Route::post('register', 'RegisterController@register');
  Route::get('reset-password', 'ResetPasswordController@form')->name('reset-password');
  Route::post('reset-password', 'ResetPasswordController@reset');
});

Route::group(['middleware' => ['auth']], function() {
  Route::get('logout', 'LogoutController')->name('logout');
});

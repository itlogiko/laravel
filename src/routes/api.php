<?php

use Illuminate\Support\Facades\Route;

Route::post('contact', 'ContactController')->name('contact');
Route::group(['as' => 'locales.', 'prefix' => 'locales'], function() {
  Route::get('list', 'LocaleController@list')->name('list');
  Route::post('switch', 'LocaleController@switch')->name('switch');
});

Route::group(['middleware' => ['guest:api']], function() {
  Route::post('forgot-password', 'ForgotPasswordController')->name('forgot-password');
  Route::post('login', 'LoginController')->name('login');
  Route::post('register', 'RegisterController')->name('register');
  Route::post('reset-password', 'ResetPasswordController')->name('reset-password');
});

Route::group(['middleware' => ['auth:api']], function() {
  Route::post('logout', 'LogoutController')->name('logout');
});

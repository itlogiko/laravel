<?php

use Illuminate\Support\Facades\Route;

Route::get('welcome', 'WelcomeController')->name('welcome');

Route::group(['middleware' => ['guest:admin']], function() {
  Route::get('forgot-password', 'ForgotPasswordController@form')->name('forgot-password');
  Route::post('forgot-password', 'ForgotPasswordController@send');
  Route::get('login', 'LoginController@form')->name('login');
  Route::post('login', 'LoginController@login');
  Route::get('register', 'RegisterController@form')->name('register');
  Route::post('register', 'RegisterController@register');
  Route::get('reset-password', 'ResetPasswordController@form')->name('reset-password');
  Route::post('reset-password', 'ResetPasswordController@reset');
});

Route::group(['middleware' => ['auth:admin']], function() {
  Route::resource('admins', 'AdminController');
  Route::resource('contacts', 'ContactController')->only(['index', 'show']);
  Route::get('logout', 'LogoutController')->name('logout');
  Route::resource('translations', 'TranslationController');
  Route::post('translations/export', 'TranslationController@export')->name('translations.export');
  Route::resource('users', 'UserController');
});

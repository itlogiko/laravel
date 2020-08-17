<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest:admin-api']], function() {
  Route::post('forgot-password', 'ForgotPasswordController')->name('forgot-password');
  Route::post('login', 'LoginController')->name('login');
  Route::post('register', 'RegisterController')->name('register');
  Route::post('reset-password', 'ResetPasswordController')->name('reset-password');
});

Route::group(['middleware' => ['auth:admin-api']], function() {
  Route::apiResource('admins', 'AdminController');
  Route::apiResource('contacts', 'ContactController')->only(['index', 'show']);
  Route::post('logout', 'LogoutController')->name('logout');
  Route::apiResource('translations', 'TranslationController');
  Route::post('translations/export', 'TranslationController@export')->name('translations.export');
  Route::apiResource('users', 'UserController');
});

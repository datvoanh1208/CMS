<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Auth::routes();
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('register', 'Auth\RegisterController@showRegisterForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('forgot-password', 'Auth\ForgotPasswordController@showForgotPasswordForm');
    Route::post('forgot-password', 'Auth\ForgotPasswordController@forgotPassword');
    Route::get('reset-password', 'Auth\ResetPasswordController@showResetPasswordForm');
    Route::post('reset-password', 'Auth\ResetPasswordController@resetPassword');
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@index']);
    Route::get('/', 'AdminController@index');
});

<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Auth::routes();

    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');

    Route::get('register', 'Auth\RegisterController@showRegisterForm');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('forgot-password', 'Auth\ForgotPasswordController@showForgotPasswordForm');
    Route::post('forgot-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');

    Route::get('reset-password/reset/{token}', 'Auth\ResetPasswordController@showResetPasswordForm');
    Route::post('reset-password/reset', 'Auth\ResetPasswordController@reset');

    Route::group(['middleware' => ['admin']], function (){
        Route::get('logout', 'Auth\LoginController@logout');

        Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@index']);

        Route::get('/', 'AdminController@index');
        Route::get('/dashboard', 'AdminController@index');
    });

});

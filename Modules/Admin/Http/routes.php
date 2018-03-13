<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@index']);

    Route::get('/', 'AdminController@index');

});

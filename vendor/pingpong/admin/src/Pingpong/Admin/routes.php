<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Pingpong\Admin\Controllers'], function ()
{
    Route::group(['before' => 'admin.guest'], function ()
    {
        Route::resource('login', 'LoginController', ['only' => ['index', 'store']]);
    });

    Route::group(['before' => 'admin.auth'], function ()
    {
        Route::get('/', ['as' => 'admin.home', 'uses' => 'SiteController@index']);
        Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'SiteController@logout']);

        // settings
        Route::get('settings', ['as' => 'admin.settings', 'uses' => 'SiteController@settings']);
        Route::post('settings', ['as' => 'admin.settings.update', 'uses' => 'SiteController@updateSettings']);

        // app
        $options = ['except' => ['show']];

        Route::resource('articles', 'ArticlesController', $options);
        Route::resource('pages', 'ArticlesController', $options);
        Route::resource('users', 'UsersController', $options);
        Route::resource('categories', 'CategoriesController', $options);
        Route::resource('roles', 'RolesController', $options);
        Route::resource('permissions', 'PermissionsController', $options);

        // backup & reset
        Route::get('backup/reset', ['as' => 'admin.reset', 'uses' => 'SiteController@reset']);
        Route::get('app/reinstall', ['as' => 'admin.reinstall', 'uses' => 'SiteController@reinstall']);
        Route::get('cache/clear', ['as' => 'admin.cache.clear', 'uses' => 'SiteController@clearCache']);
    });
});

Route::get('schedules','SchedulesController@getIndex');
Route::get('book/{teacher_id}/{hour}/{date}','SchedulesController@book');
Route::get('book/success/{id}','SchedulesController@success');
Route::get('/logout', ['as' => 'logout', 'uses' => 'Pingpong\Admin\Controllers\SiteController@logout']);

Route::get('articles','ArticlesController@getIndex');

Route::get('article/{slug}','ArticlesController@view');

Route::post('create','Pingpong\Admin\Controllers\UsersController@store');

Route::get('audios',function(){
    return View::make('front.audio');
});

Route::get('videos',function(){
    return View::make('front.video');
});

Route::get('gallery',function(){
    return View::make('front.gallery');
});

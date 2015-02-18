<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Pingpong\Admin\Controllers'], function ()
{
    Route::group(['before' => 'admin.guest'], function ()
    {
        Route::resource('login', 'LoginController', ['only' => ['index', 'store']]);
    });

    Route::get('schedules', ['as' => 'admin.calendar.schedules', 'uses' => 'CalendarController@indexSchedules']);
    
    Route::get('schedules/new', ['as' => 'admin.calendar.createSchedule', 'uses' => 'CalendarController@createSchedule']);
    Route::post('schedules/new', ['as' => 'admin.calendar.storeSchedule', 'uses' => 'CalendarController@storeSchedule']);
    
    Route::get('schedules/edit/{id}', ['as' => 'admin.calendar.editSchedule', 'uses' => 'CalendarController@editSchedules']);
    Route::put('schedules/update/{id}', ['as' => 'admin.calendar.updateSchedule', 'uses' => 'CalendarController@updateSchedule']);
    
    Route::delete('schedules/delete/{id}', ['as' => 'admin.schedules.destroy', 'uses' => 'CalendarController@destroySchedule']);

    Route::get('reservations', ['as' => 'admin.calendar.reservations', 'uses' => 'CalendarController@indexReservations']);
    
    Route::get('reservations/new', ['as' => 'admin.calendar.createReservation', 'uses' => 'CalendarController@createReservation']);
    Route::post('reservations/new', ['as' => 'admin.calendar.storeReservation', 'uses' => 'CalendarController@storeReservation']);
    
    Route::get('reservations/update/{id}', ['as' => 'admin.calendar.editReservation', 'uses' => 'CalendarController@editReservation']);
    Route::put('reservations/update/{id}', ['as' => 'admin.calendar.updateReservation', 'uses' => 'CalendarController@updateReservation']);
    
    Route::delete('reservations/delete/{id}', ['as' => 'admin.reservations.destroy', 'uses' => 'CalendarController@destroyReservation']);

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
Route::get('gallery','GalleriesController@getIndex');

Route::get('article/{slug}','ArticlesController@view');

Route::post('create','Pingpong\Admin\Controllers\UsersController@store');

Route::get('audios',function(){
    return View::make('front.audio');
});

Route::get('videos',function(){
    return View::make('front.video');
});

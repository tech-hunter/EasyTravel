<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Package',
    'prefix' => 'admin/package/air'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'AirController@index')->name('admin.air.index');

    Route::get('/create', ['uses' => 'AirController@create', 'as' => 'admin.air.create']);

    Route::post('', ['uses' => 'AirController@store', 'as' => 'admin.air.store']);

    Route::get('/show/{id}', ['uses' => 'AirController@show', 'as' => 'admin.air.show']);

    Route::get('/edit/{id}', ['uses' => 'AirController@edit', 'as' => 'admin.air.edit']);

    Route::post('/update/{id}', ['uses' => 'AirController@update', 'as' => 'admin.air.update']);

    Route::get('/destroy/{id}', ['uses' => 'AirController@destroy', 'as' => 'admin.air.destroy']);
});
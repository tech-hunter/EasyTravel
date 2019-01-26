<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Package',
    'prefix' => 'admin/package/hotel'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'HotelController@index')->name('admin.hotel.index');

    Route::get('/create', ['uses' => 'HotelController@create', 'as' => 'admin.hotel.create']);

    Route::post('', ['uses' => 'HotelController@store', 'as' => 'admin.hotel.store']);

    Route::get('/show/{id}', ['uses' => 'HotelController@show', 'as' => 'admin.hotel.show']);

    Route::get('/edit/{id}', ['uses' => 'HotelController@edit', 'as' => 'admin.hotel.edit']);

    Route::put('/update/{id}', ['uses' => 'HotelController@update', 'as' => 'admin.hotel.update']);

    Route::get('/destroy/{id}', ['uses' => 'HotelController@destroy', 'as' => 'admin.hotel.destroy']);
});
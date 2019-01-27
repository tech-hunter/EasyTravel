<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Package',
    'prefix' => 'admin/hotelcost'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'HotelCostController@index')->name('admin.hotelcost.index');

    Route::get('/create', ['uses' => 'HotelCostController@create', 'as' => 'admin.hotelcost.create']);

    Route::post('', ['uses' => 'HotelCostController@store', 'as' => 'admin.hotelcost.store']);

    Route::get('/show/{id}', ['uses' => 'HotelCostController@show', 'as' => 'admin.hotelcost.show']);

    Route::get('/edit/{id}', ['uses' => 'HotelCostController@edit', 'as' => 'admin.hotelcost.edit']);

    Route::post('/update/{id}', ['uses' => 'HotelCostController@update', 'as' => 'admin.hotelcost.update']);

    Route::get('/destroy/{id}', ['uses' => 'HotelCostController@destroy', 'as' => 'admin.hotelcost.destroy']);
});
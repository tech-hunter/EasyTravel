<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Offer',
    'prefix' => 'admin/offer/tour'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'TourController@index')->name('admin.tour.index');

    Route::get('/create', ['uses' => 'TourController@create', 'as' => 'admin.tour.create']);

    Route::post('', ['uses' => 'TourController@store', 'as' => 'admin.tour.store']);

    Route::get('/show/{id}', ['uses' => 'TourController@show', 'as' => 'admin.tour.show']);

    Route::get('/edit/{id}', ['uses' => 'TourController@edit', 'as' => 'admin.tour.edit']);

    Route::put('/update/{id}', ['uses' => 'TourController@update', 'as' => 'admin.tour.update']);

    Route::get('/destroy/{id}', ['uses' => 'TourController@destroy', 'as' => 'admin.tour.destroy']);
});
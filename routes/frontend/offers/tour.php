<?php
Route::group([
   'middleware' => 'auth',
    'namespace' => 'Frontend\Offer',
    'prefix' => 'offers/tour'
], function() {
    Route::get('', ['uses' => 'TourController@index', 'as' => 'tour']);

    Route::get('/create', ['uses' => 'TourController@create', 'as' => 'tour.create']);

    Route::post('', ['uses' => 'TourController@store', 'as' => 'tour.store']);

    Route::get('/show/{id}', ['uses' => 'TourController@show', 'as' => 'tour.show']);

    Route::get('/edit/{id}', ['uses' => 'TourController@edit', 'as' => 'tour.edit']);

    Route::post('/update/{id}', ['uses' => 'TourController@update', 'as' => 'tour.update']);

    Route::get('/destroy/{id}', ['uses' => 'TourController@destroy', 'as' => 'tour.destroy']);
});
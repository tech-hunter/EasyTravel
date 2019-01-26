<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Offer',
    'prefix' => 'admin/offer/Treatment'

], function() {
    
    // Route::get('', ['uses' => 'TreatmentController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'TreatmentController@index')->name('admin.treatment.index');

    Route::get('/create', ['uses' => 'TreatmentController@create', 'as' => 'admin.treatment.create']);

    Route::post('', ['uses' => 'TreatmentController@store', 'as' => 'admin.treatment.store']);

    Route::get('/show/{id}', ['uses' => 'TreatmentController@show', 'as' => 'admin.treatment.show']);

    Route::get('/edit/{id}', ['uses' => 'TreatmentController@edit', 'as' => 'admin.treatment.edit']);

    Route::put('/update/{id}', ['uses' => 'TreatmentController@update', 'as' => 'admin.treatment.update']);

    Route::get('/destroy/{id}', ['uses' => 'TreatmentController@destroy', 'as' => 'admin.treatment.destroy']);
});
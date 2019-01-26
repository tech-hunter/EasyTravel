<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Package',
    'prefix' => 'admin/package/train'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'TrainController@index')->name('admin.train.index');

    Route::get('/create', ['uses' => 'TrainController@create', 'as' => 'admin.train.create']);

    Route::post('', ['uses' => 'TrainController@store', 'as' => 'admin.train.store']);

    Route::get('/show/{id}', ['uses' => 'TrainController@show', 'as' => 'admin.train.show']);

    Route::get('/edit/{id}', ['uses' => 'TrainController@edit', 'as' => 'admin.train.edit']);

    Route::put('/update/{id}', ['uses' => 'TrainController@update', 'as' => 'admin.train.update']);

    Route::get('/destroy/{id}', ['uses' => 'TrainController@destroy', 'as' => 'admin.train.destroy']);
});
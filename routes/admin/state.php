<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\State',
    'prefix' => 'admin/state'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'StateController@index')->name('admin.state.index');

    Route::get('/create', ['uses' => 'StateController@create', 'as' => 'admin.state.create']);

    Route::post('', ['uses' => 'StateController@store', 'as' => 'admin.state.store']);

    Route::get('/show/{id}', ['uses' => 'StateController@show', 'as' => 'admin.state.show']);

    Route::get('/edit/{id}', ['uses' => 'StateController@edit', 'as' => 'admin.state.edit']);

    Route::put('/update/{id}', ['uses' => 'StateController@update', 'as' => 'admin.state.update']);

    Route::get('/destroy/{id}', ['uses' => 'StateController@destroy', 'as' => 'admin.state.destroy']);
});
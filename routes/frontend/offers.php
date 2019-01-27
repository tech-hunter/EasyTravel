<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Frontend',
    'prefix' => 'offers'
], function() {
    Route::get('', ['uses' => 'OffersController@index', 'as' => 'offers']);
});
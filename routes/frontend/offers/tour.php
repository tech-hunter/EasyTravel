<?php
Route::group([
   'middleware' => 'auth',
    'namespace' => 'Frontend\Offer',
    'prefix' => 'offers'
], function() {
    Route::get('/tour', ['uses' => 'TourController@index', 'as' => 'tour']);
});
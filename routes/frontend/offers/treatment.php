<?php
Route::group([
   'middleware' => 'auth',
    'namespace' => 'Frontend\Offer',
    'prefix' => 'offers'
], function() {
    Route::get('/treatment', ['uses' => 'TreatmentController@index', 'as' => 'treatment']);
});
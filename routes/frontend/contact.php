<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Frontend',
    'prefix' => 'contact'
], function() {
    Route::get('', ['uses' => 'ContactController@index', 'as' => 'contact']);
});
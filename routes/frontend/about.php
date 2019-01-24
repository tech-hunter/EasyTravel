<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Frontend',
    'prefix' => 'about'
], function() {
    Route::get('', ['uses' => 'AboutController@index', 'as' => 'about']);
});
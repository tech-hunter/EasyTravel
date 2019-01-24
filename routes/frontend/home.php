<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Frontend',
    // 'prefix' => null
], function() {
    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
});
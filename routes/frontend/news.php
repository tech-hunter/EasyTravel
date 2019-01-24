<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Frontend',
    'prefix' => 'news'
], function() {
    Route::get('', ['uses' => 'NewsController@index', 'as' => 'news']);
});
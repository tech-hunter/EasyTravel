<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group([
    'middleware' => 'guest:admin'
], function() {
    
    include_once 'admin/admin_auth.php';
});

Route::group([
    'middleware' => 'auth:admin',
    'namespace' => 'Admin\Admin_auth',
    'prefix' => 'admin'
], function() {    
    Route::get('/logout', ['uses' => 'AdminLoginController@logout', 'as' => 'admin.logout']);
});




Route::group([
    'middleware' => 'auth:admin'
], function() {

    include_once 'admin/dashboard.php';
    
});




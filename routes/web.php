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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    include_once 'admin/tour.php';
    include_once 'admin/treatment.php';
    include_once 'admin/air.php';
    include_once 'admin/hotel.php';
    include_once 'admin/train.php';
    include_once 'admin/state.php';
    include_once 'admin/hotelcost.php';

    
});


Route::group([
    'middleware' => 'auth'
], function() {

    include_once 'frontend/offers/tour.php';
    include_once 'frontend/offers/treatment.php';
    
});



Route::group([
    // 'middleware' => 'guest'
], function() {

    include_once 'frontend/home.php';
    include_once 'frontend/about.php';
    include_once 'frontend/news.php';
    include_once 'frontend/contact.php';

});



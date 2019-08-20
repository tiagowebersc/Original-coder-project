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

Route::get('/', 'indexController@index')->name('index');

// Login / Signup / ...
Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@loginPost');
Route::get('/signup', 'UserController@signup');
Route::post('/signup', 'UserController@signupPost');
Route::get('/forgot_password', 'UserController@forgotPassword');
Route::post('/forgot_password', 'UserController@forgotPasswordPost');
Route::get('/reset_password/{token}', 'UserController@resetPassword');
Route::post('/reset_password/{token}', 'UserController@resetPasswordPost');
Route::get('/signout', 'UserController@signout');
// Lunchbag functions
Route::get('/lunchbag', 'LunchBagController@main');
Route::get('/lunchbagTotal', 'LunchBagController@totalItems');
Route::put('/addlunchbag/{idMenu}', 'LunchBagController@addLunchBag');
Route::delete('/removelunchbag/{idMenu}', 'LunchBagController@removeLunchBag');

// TRUCKS DASHBOARD

Route::get('/truck', 'TruckController@getOrders')->name('truck');
Route::post('/truck', 'TruckController@updateOrders');
Route::get('/truck/orderFilter', 'TruckController@filterOrder');
Route::post('/truck/orderFilter', 'TruckController@updateOrders');
Route::get('/truck/menu/{idTruck}', 'MenuController@main');
Route::get('/truck/details/{id}', 'OrderController@detailsOrders')->name('details');
Route::post('/truck/details/{id}', 'OrderController@updateOrdersDetails');
Route::get('/truck/schedule', 'TruckController@getSchedule');
Route::post('/truck/schedule', 'TruckController@setSchedule');

// TRUCKS DASHBOARD **

Route::get('/test', function () {
    return view('layouts/customerSidebar');
});

// TEST VIEW for the RESET PASSWORD email
Route::get('/testEmail', function () {
    return view('mail');
});

Route::get('/foodtruckinfo/{id_truck}', 'foodTruckController@main');


// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/footer', function () {
    return view('footer');
});

Route::get('/test2', function () {
    return view('layouts/truckOwnerSidebar');
});
Route::get('/test3', function () {
    return view('layouts/filterbar');
});

Route::get('/listTest', 'IndexController@foodTruckList');

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

Route::get('/','indexController@index')->name('index');;

Route::get('/login', 'UserController@login')->name('login');

Route::get('/signup', 'UserController@signup');

Route::post('/login', 'UserController@loginPost');

Route::post('/signup', 'UserController@signupPost');

Route::get('/forgot_password', 'UserController@forgotPassword');
Route::post('/forgot_password', 'UserController@forgotPasswordPost');

Route::get('/reset_password/{token}', 'UserController@resetPassword');
Route::post('/reset_password/{token}', 'UserController@resetPasswordPost');


// TRUCKS DASHBOARD
Route::get('/truck', 'TruckController@getOrders');
// EVERYTIME IT REFRESH, IT UPDATES
Route::post('/truck', 'TruckController@updateOrders');

Route::get('/truck/orderFilter', 'TruckController@filterOrder');
// EVERYTIME IT REFRESH, IT UPDATES
Route::post('/truck/orderFilter', 'TruckController@updateOrders');

Route::get('/test', function () {
    return view('layouts/customerSidebar');
});


Route::get('/foodtruckinfo/{id_truck}', 'foodTruckController@main');


// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/footer', function () {
    return view('footer');
});

Route::get('/test2', function () {
    return view('layouts/truckownerSidebar');
});

Route::get('/listTest', 'IndexController@foodTruckList');

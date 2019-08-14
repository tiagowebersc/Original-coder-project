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
    return view('index');
});

Route::get('/login', 'UserController@login');

Route::post('/login', 'UserController@loginPost');

Route::post('/signup', 'UserController@signupPost');

Route::get('/truck/{id}', 'TruckController@getOrders');


Route::get('/test', function () {
    return view('truckOwnerDashboard');
});


// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/footer', function () {
    return view('footer');
});

Route::get('/test2', function () {
    return view('layouts/truckownerSidebar');
});

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

Route::post('/', 'indexController@filterCategory');

// ! Login / Signup / ...
Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@loginPost');
Route::get('/signup', 'UserController@signup');
Route::post('/signup', 'UserController@signupPost');
Route::get('/forgot_password', 'UserController@forgotPassword');
Route::post('/forgot_password', 'UserController@forgotPasswordPost');
Route::get('/reset_password/{token}', 'UserController@resetPassword');
Route::post('/reset_password/{token}', 'UserController@resetPasswordPost');
Route::get('/signout', 'UserController@signout');
// ! Lunchbag functions
Route::get('/lunchbag', 'LunchBagController@main')->name('lunchBag');
Route::get('/lunchbagTotal', 'LunchBagController@totalItems');
Route::get('/lunchbagTotalPrice', 'LunchBagController@totalPriceItems');
Route::put('/addlunchbag', 'LunchBagController@addLunchBag');
Route::delete('/removelunchbag', 'LunchBagController@removeLunchBag');
Route::post('/generateOrder', 'OrderController@generateOrder');
// ! TRUCKS DASHBOARD
Route::get('/truck', 'TruckController@getOrders')->name('truck');
Route::post('/truck', 'TruckController@updateOrders');
Route::get('/truck/orderFilter', 'TruckController@filterOrder');
Route::post('/truck/orderFilter', 'TruckController@updateOrders');
Route::get('/foodtruck/favorite/{idTruck}', 'foodTruckController@getFavorite');
Route::post('/foodtruck/favorite/{idTruck}', 'foodTruckController@setFavorite');
// ! MENU
Route::get('/truck/menu', 'MenuController@getMenu')->name('menu'); //menu editing page
Route::post('/truck/menu', 'MenuController@setMenu');
Route::post('/truck/menu/info', 'MenuController@getEditMenu');
Route::get('/truck/menu/info', 'MenuController@getMenu');
Route::get('/truck/menu/delete/{id}', 'MenuController@deleteMenu');

Route::get('/truck/details/{id}', 'OrderController@detailsOrders')->name('details');
Route::post('/truck/details/{id}', 'OrderController@updateOrdersDetails');

Route::get('/truck/schedule', 'TruckController@getSchedule')->name('schedule');
Route::post('/truck/schedule', 'TruckController@setSchedule');
Route::post('/truck/schedule/info', 'TruckController@getEditSchedule');
Route::get('/truck/schedule/info', 'TruckController@getSchedule');
Route::get('/truck/schedule/delete/{id}', 'TruckController@deleteSchedule');

// ! TRUCKS DASHBOARD **
Route::get('/test', function () {
    return view('layouts/customerSidebar');
});

Route::get('/foodtruckinfo/{id_truck}', 'foodTruckController@main'); //foodtruck information+item page
Route::post('/addReview', 'foodTruckController@saveReview');
Route::get('/adminedit', 'AdminEditController@getUsers'); // Admin page to edit user

// ! USER SETTINGS PAGE **
Route::get('/userDashboard', 'UserController@orderHistory');
// User settings page

// TEST VIEW for the RESET PASSWORD email
Route::get('/mailTruckConfirm', function () {
    return view('mailTruckConfirm');
});

// Route::get('/index', function () {
//     return view('index');
// });

// ! REVIEW SCROLL BOX
Route::get('/scrollbox', 'ScrollBoxController@scrollBox');


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

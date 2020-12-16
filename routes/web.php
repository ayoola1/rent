<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', function () {
//     return view('home')->name('home');
// });

// Route::get('/', 'RegisterController@getRegisterForm')->name('register');

Route::get('/verify', 'RegisterController@getverify')->name('verify');

Route::get('/dashboard', 'DashBoardController@getdashboard')->name('dashboard');

Route::post('/register', 'RegisterController@create')->name('register');

Route::post('/verify', 'RegisterController@verify')->name('verify');

Route::resource("/property",'PropertyController');
Route::resource("/landlord",'LandlordController');
Route::resource("/tenant",'TenantController');
Route::resource("/type",'TypeController');
Route::resource("admin/profile",'ProfileController');
;

Route::get('admin','AdminController@index')->name('admin');

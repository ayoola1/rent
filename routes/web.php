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

Route::resource("admin/tenant",'TenantController');
Route::resource("admin/profile",'ProfileController');

Route::get('admin','AdminController@index')->name('admin');

//PagesController
Route::get('/pages/about', 'PagesController@about')->name('about');
Route::get('/pages/contact', 'PagesController@contact')->name('contact');
Route::get('/pages/faq', 'PagesController@faq')->name('faq');
Route::get('/pages/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/pages/service', 'PagesController@service')->name('service');
Route::get('/pages/terms', 'PagesController@terms')->name('terms');

//PropertyController
Route::get('/property/property-index', 'PropertyController@property_index')->name('property_index');
Route::get('/property/property-show', 'PropertyController@property_show')->name('property_show');

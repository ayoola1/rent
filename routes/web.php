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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home')->name('home');
// });

Route::get('/dashboard', 'DashBoardController@getdashboard')->name('dashboard');

// Route::get('/dashboard/profile/{profile}', 'DashBoardController@dashboardProfile')->name('profile');


//Register Controller
Route::get('/register', 'RegisterController@registrationform')->name('register');
Route::post('/register', 'RegisterController@create')->name('register');

//LoginController

Route::get('/login', 'LoginController@loginform')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

//Verify Controller
Route::get('/verify', 'RegisterController@getverify')->name('verify');

Route::post('/verify', 'RegisterController@verify')->name('verify');

// SpecialControllers

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('dashboard/admin','AdminController@index')->name('admin')->middleware('admin');
Route::get('dashboard/land','LandlordController@allLandlord')->name('land');
Route::get('dashboard/land/{land}','LandlordController@allLand')->name('allland');
Route::get('dashboard/tent','TenantController@allTenant')->name('tent');
Route::get('dashboard/tent/{tent}','TenantController@alltent')->name('alltent');
Route::get('dashboard/property/mortgage','PropertyController@allProperty')->name('mortgage');
Route::put('dashboard/prop/{proper}','PropertyController@Active')->name('active');
Route::put('dashboard/prop/{prop}','PropertyController@notActive')->name('notactive');
Route::get('/download/{file}','DocumentController@getDownload')->name('download');
Route::get('/dashboard/theprofile/{profile}','ProfileController@theProfile')->name('theprofile');
Route::get('/dashboard/theprofileland/{profile}','ProfileController@theProfileland')->name('theprofileland');
Route::get('/dashboard/theshow/{property}','PropertyController@theshow')->name('theshow');

Route::put('/dashboard/updatepropTent/{property}','PropertyController@updatepropTent')->name('updatepropTent');

Route::get('/dashboard/specnote/{specnote}','NoteController@specificNote')->name('specnote');
Route::get('/dashboard/allreplies','ReplyController@allReplies')->name('allReplies');
Route::get('/dashboard/editproperty/{editproperty}', 'PropertyController@editProperty')->name('editproperty');


Route::put('dashboard/approve/{appro}','NoteController@Approved')->name('approved');
Route::put('dashboard/notapproved/{approo}','NoteController@notApproved')->name('notapproved');
Route::get('dashboard/withdraw/{withdraw}','WalletController@withdraw')->name('withdraw');
Route::put('dashboard/withdraw/{withdraw}','WalletController@withdrawupdate')->name('wallet.withdraw');
Route::get("/accountverification/{account}",'KycController@accountActivation')->name('account');
Route::get("/accountverification/payment/{account}",'KycController@accountPaymentOption')->name('payment');
Route::get("/accountverification/finance/{account}",'KycController@financialActivation')->name('finance');
Route::get("/accountverification/rent/{account}",'KycController@rentDetailsActivation')->name('rent_detail');

Route::get("/accountverification/breakdown/{account}",'KycController@breakdown')->name('payment_breakdown');


Route::put('/accountupdate/{accountupdate}', 'kycController@accountupdate')->name('accountupdate');

Route::put('/paymentupdate/{paymentupdate}', 'kycController@paymentupdate')->name('paymentupdate');

Route::put('/calbreakdown/{calpaymentupdate}', 'kycController@calbreakdown')->name('calbreakdown');

Route::put('/financialupdate/{financialupdate}', 'kycController@financialupdate')->name('financialupdate');

// Route::post('dashboard/property/{prop}', 'PropertyController@notActive')->name('notactive');



//Resource Controllers

Route::resource("dashboard/profile",'ProfileController');
Route::resource("dashboard/property",'PropertyController');
Route::resource("dashboard/landlord",'LandlordController')->middleware('landlord');
Route::resource("dashboard/tenant",'TenantController')->middleware('tenant');
Route::resource("dashboard/type",'TypeController');
Route::resource("dashboard/document",'DocumentController');


Route::resource("dashboard/docs",'DocumentController');
Route::resource("dashboard/bills",'BillController');
Route::resource("dashboard/report",'ReportController');
Route::resource("dashboard/wallet",'WalletController');
Route::resource("dashboard/note",'NoteController');
Route::resource("dashboard/reply",'ReplyController');
Route::resource("/kyc",'KycController');




//AdminProfile
// Route::get('/admin','AdminController@index')->name('admin')->middleware('auth');

// Route::get('admin/{profile}','AdminController@showProfile')->name('admin-profile');


// Route::get('admin/{profile}','AdminController@showProfile')->name('admin-profile');
// Route::get('admin/{profile}/index','AdminController@showProfile')->name('admin-profile-index');


//PagesController
Route::get('/listings', 'PagesController@listing')->name('listing');
Route::get('/single/{single}', 'PagesController@single')->name('single');
Route::get('/pages/faq', 'PagesController@faq')->name('faq');
Route::get('/pages/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/pages/service', 'PagesController@service')->name('service');
Route::get('/pages/terms', 'PagesController@terms')->name('terms');

//PropertiController
Route::get('/properti/property-index', 'PropertiController@property_index')->name('property_index');
Route::get('/properti/property-show', 'PropertiController@property_show')->name('property_show');

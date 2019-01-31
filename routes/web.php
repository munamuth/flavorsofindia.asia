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


Route::middleware(['web'])->group(function () {
	Route::get('/', 'PageController@index');
	Route::get('/about-us', 'PageController@about');	
	Route::get('/special-offer', 'PageController@specialOffer');
	Route::get('/menu', 'PageController@menu');
	Route::get('/gallery', 'PageController@gallery');
	Route::get('/branches', 'PageController@branches');
});
Route::get('/admin/login', function(){
		return view('admin.user.login');
	});
Route::middleware(['auth'])->group(function () {
	Route::get('/admin', function(){
		return view('admin.dashboard');
	});
	
	Route::resource('/admin/slider', 'SliderController');
	Route::resource('/admin/home_description', 'HomeDescriptionController');


	Route::resource('/admin/about_us', 'AboutController');
	Route::resource('/admin/menu', 'MenuController');
	Route::post('/admin/menu/changephoto1/{id}', 'MenuController@changPhoto1');
	Route::post('/admin/menu/changephoto2/{id}', 'MenuController@changPhoto2');

	
	Route::resource('/admin/special', 'SpecialController');
	Route::resource('/admin/branch', 'BranchController');
	Route::post('/admin/branch/changephoto/{id}', 'BranchController@changPhoto');

	Route::resource('/admin/gallery', 'GalleryController');
	Route::resource('/admin/history', 'HistoryController');
	Route::resource('/admin/review', 'ReviewController');
	Route::resource('/admin/users', 'UserController');
	Route::post('/admin/users/changepassword/{id}', 'UserController@changepassword');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::middleware(['web'])->group(function () {
	Route::get('/admin', function(){
		return view('admin.dashboard');
	});
	Route::resource('/admin/slider', 'SliderController');
	Route::resource('/admin/about_Us', 'AboutController');
	Route::resource('/admin/menu', 'MenuController');
	Route::resource('/admin/facility', 'FacilityController');
	Route::resource('/admin/gallery', 'GalleryController');
	Route::resource('/admin/photo', 'PhotoController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

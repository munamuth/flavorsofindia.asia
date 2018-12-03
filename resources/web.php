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
	Route::get('/about_us', 'PageController@about');	
	Route::get('/rooms', 'PageController@rooms');
	Route::get('/rooms/read_more/room_id={id}', 'PageController@roomReadMore');
	Route::get('/gallery', 'PageController@gallery');
	Route::get('/contact_us', 'PageController@contact');

});

Route::middleware(['web'])->group(function () {
	Route::get('/admin', function(){
		return view('admin.dashboard');
	});
	Route::resource('/admin/slider', 'SliderController');
	Route::resource('/admin/room_type', 'RoomTypeController');
	Route::resource('/admin/facility', 'FacilityController');
	Route::resource('/admin/gallery', 'GalleryController');
	Route::resource('/admin/photo', 'PhotoController');

});
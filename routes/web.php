<?php
	/*
	 * To be Deleted
	 */
	Route::get('/email-test', function () {
		return new App\Mail\Welcome(\Illuminate\Support\Facades\Auth::user());
	});
	Route::get('logout', function () {
		\Illuminate\Support\Facades\Auth::logout();
		return redirect()->to('/');
	});
	/*
	 * Social Auth
	 */
	Route::namespace('Auth')->group(function () {
		Route::get('/social-auth/{service}', 'LoginController@redirectToProvider');
		Route::get('social-auth/{service}/callback', 'LoginController@handleProviderCallback');
	});
	/*
	 * Guest Routes
	 */
	Route::namespace('Guest')->group(function () {
		Route::get('/', 'GuestController@index')->name('citizen');
	});
	/*
	 * Admin Routes
	 */
	Route::prefix('admin')->namespace('Admin')->group(function () {
		Route::get('/', 'AdminController@index')->name('admin');
	});
	/*
	 * Official Routes
	 */
	Route::prefix('official')->namespace('Official')->group(function () {
		Route::get('/', 'OfficialController@index')->name('official');
	});
	/*
	 * Citizen Routes
	 */
	Route::prefix('citizen')->namespace('Citizen')->group(function () {
		Route::get('/', 'CitizenController@index')->name('citizen');
	});
	
	
	Auth::routes();
	
	Route::get('/home', 'HomeController@index')->name('home');



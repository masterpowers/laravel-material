<?php

// If Auth then root page is dashboard
Route::get('/', function () {

	if (Auth::check()) {
		return view('dashboard');
	}
	return view('pages.marketing');

});

// Dashboard routes
Route::get('dashboard', ['middleware' => 'auth', function() {
	return view('dashboard');
}]);

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

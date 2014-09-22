<?php

/////////////////Home Page Route/////////////////
Route::get('/', 'PagesController@home');
Route::get('home', [
	'as' => 'home',
	'uses' => 'PagesController@home']);

/////////////////About page Route/////////////////
Route::get('about', 'PagesController@about');

/////////////////Contact Page Route/////////////////
Route::get('contact', 'PagesController@contact');

/////////////////Contact Page Route/////////////////
Route::get('whatson', 'PagesController@whatson');

Route::get('home2', 'PagesController@home2');

/////////////////Goobye Page Route/////////////////
Route::get('goodbye', 'PagesController@goodbye');

/////////////////Denied Page Route/////////////////
Route::get('denied', 'PagesController@denied');

/////////////////Account Login Page Route/////////////////
Route::get('login', array('uses' => 'AuthController@create'));
/////////////////Account Logout Route Redirects to Home Page/////////////////
Route::get('logout', 'AuthController@onlogout');

Route::get('employer/create', function()
{
	return 'Hello World';
});

/*
*Employer Dashboard
*/
Route::get('employerdashboard', [
	'as' => 'employerdash',
	'uses' => 'EmployerController@dash'
])->before('auth');

/////////////////Resourceful Routes/////////////////
Route::resource('user', 'UsersController');
Route::resource('auth', 'AuthController');

Route::resource('ue', 'UserEmpController');
Route::resource('employer', 'EmployerController');

Route::resource('uj', 'UserJsController');

Route::resource('jobseeker', 'JobseekerController');

Route::resource('joblisting', 'JoblistingController');

Route::get('test', [
	'as' => 'test',
	'uses' => 'UsersController@one']);

Route::post('test', 'UsersController@two');

Route::post('jobsearch', [
	'as' => 'jobsearch',
	'uses' => 'JoblistingController@search']);


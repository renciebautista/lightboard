<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/themes', function()
{
	return View::make('hello');
});

Route::get('logout', array('as' => 'log-out',  'uses' => 'SessionsController@destroy'));
Route::get('login', array('as' => 'log-in',  'uses' => 'SessionsController@create'));
Route::post('login', array('as' => 'log-in',  'uses' => 'SessionsController@store'));

Route::get('/', array('as' => 'sign-up.index', 'uses' => 'SignupsController@index'));

Route::get('signup', array('as' => 'sign-up', 'uses' => 'SignupsController@create'));
Route::post('signup',array('as' => 'sign-up', 'uses' => 'SignupsController@store'));

Route::group(array('before' => 'auth'), function()
{
	Route::resource('items', 'ItemsController');

	Route::resource('sales', 'SalesController');

	Route::resource('branches', 'BranchesController');

	Route::resource('department', 'DepartmentsController');

	Route::resource('category', 'CategoriesController');

	Route::resource('dashboard', 'DashboardController');
});


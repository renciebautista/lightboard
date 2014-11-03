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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('sign-up', array('as' => 'sign-up', 'uses' => 'SignupsController@create'));
Route::post('sign-up',array('as' => 'sign-up', 'uses' => 'SignupsController@store'));

Route::resource('items', 'ItemsController');

Route::resource('sales', 'SalesController');

Route::resource('branches', 'BranchesController');

Route::resource('department', 'DepartmentsController');

Route::resource('category', 'CategoriesController');

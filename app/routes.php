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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

#PUBLIC ROUTES
Route::group(array('prefix' => ''), function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
});

#ADMIN ROUTES
Route::group(array('prefix' => 'kiadmin'), function()
{
    #Dashboard
	Route::get('/', ['as' => 'adminhome', 'uses' => 'HomeController@indexAdmin']);

});

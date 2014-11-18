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
//the pages
Route::get('/', function()
{
	return View::make('pages.home');
});
Route::get('/about', function()
{
	return View::make('pages.about');
});
Route::get('/products', function()
{
	return View::make('pages.products');
});

Route::get('/contact', function()
{
	return View::make('pages.contact');
});
// Route for sign up page
Route::get('signup', 'AuthController@signUpPage');
Route::post('signup', 'AuthController@signup');
//routes for admin  authetication
Route::resource('/user', 'UserController');
Route::controller('/index', 'HomeController');
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

Route::resource('posts', 'PostsController');


Route::get('/', 'HomeController@showWelcome');

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('boxmodel', 'HomeController@showBoxModel');

Route::get('whackamole', 'HomeController@whackamole');

Route::get('calculator', 'HomeController@calculator');

Route::get('toolshed', 'HomeController@showTools');


Route::get('form', function()
{
    return View::make('form');
});

Route::post('form', function()
{
    return var_dump(Input::all());
});


<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//  a Route to Home page  = login page = PageController@index
Route::get('login','PageController@login');


// a route to welkom page = PageController@welkom
Route::get('welkom','PageController@welkom');


// a route to  customer page = PageController@customer => a get:resource!!



// a route to Bikes page = PageController@bikes => a get:respource!!



// a route to Admin Role panel = PageController@Admin



// a route to instructions = PageController@instructions



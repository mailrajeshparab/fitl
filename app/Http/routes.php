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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

// Route::get('about', function () {
//     return view('pages/about');
// });

Route::get('about','PageController@about');

// parameter passing info from controller to view
// Route::get('questions/{question}','QuestionController@show1'); 


Route::get('questions/{question}','QuestionController@show2');
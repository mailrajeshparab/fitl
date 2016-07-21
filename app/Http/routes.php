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

Route::get('about','PageController@about');
Route::get('contact','PageController@contact');

//---QuestionsController------------------------------------------------//

Route::delete('questions/{question}','QuestionController@destroy');

Route::get('questions/{question}/edit','QuestionController@edit');
Route::put('questions/{question}','QuestionController@update');

Route::post('questions/store','QuestionController@store');
Route::get('questions/create','QuestionController@create');

Route::get('questions/{question}','QuestionController@show');
Route::get('questions','QuestionController@index');









//---C---Create a Page with a Form using ( get-create-action ) + ( post-store-action )
//---R---Index Page to display multiple objects ( get-index-action )
//-------Show Page to display a Single Object ( get-show-action )
//---U---Edit Page with a Form to udpate existing object  ( get-edit-action ) + ( put-update-action )
//---D---Delete a selected object

// Route::get('questions/{question}/edit','QuestionController@edit');
// Route::put('questions/{question}','QuestionController@update');

// Route::post('questions/store','QuestionController@store');

// Route::get('questions/create','QuestionController@create');

// Route::get('questions/{question}','QuestionController@show');
// Route::get('questions','QuestionController@index');
<?php

Route::get('/','BugsController@buglist');

Route::resource('lang','LangsController');
Route::resource('bug','BugsController');


Route::get('/help', function()
{
	$test='this text comes from $test variable, retrieved using double squered brackets';
	return View::make('index',compact('test'));
});

<?php

Route::get('/',function(){
	$bugs=Bug::all();
	return View::make('buglist',compact('bugs'));
});


Route::get('/help', function()
{
	$test='this text comes from $test variable, retrieved using double squered brackets';
	return View::make('index',compact('test'));
});

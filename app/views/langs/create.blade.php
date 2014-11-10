@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Add a new language</h1>
	<a href="[[URL::to('lang')]]">Back to languages index</a>
	[[Form::open(array('url'=>URL::to('lang')))]]
	<div class="row">
		<div class="col-sm-2">
			<input type="text" class='form-control' placeholder='name' name='name' id='name'>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<input type="text" class='form-control' placeholder='description' name='description' id='description'>
		</div>
	</div>
	<input type="submit" value='create'>
	[[Form::close()]]
</div>
@stop
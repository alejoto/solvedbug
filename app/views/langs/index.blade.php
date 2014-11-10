@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Current Programming languages</h1>
	<a href="[[URL::to('/')]]">Go back to bugs log</a>
	<br>
	<a href="[[URL::to('lang/create')]]">Add a new program language</a>
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr>
		@foreach($langs as $l)
			<tr>
				<td>
					[[$l->name]]
				</td>
				<td>
					[[$l->description]]
				</td>
			</tr>
		@endforeach
	</table>
</div>
@stop
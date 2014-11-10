@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Bug log table</h1>
	<a href="">Register a new bug</a>
	<table class="table">
		<tr>
			<th>Description</th>
			<th>Languages</th>
			<th>Solution</th>
		</tr>
		@foreach($bugs as $b)
		<tr>
			<td> [[$b->description ]] </td>
			<td></td>
			<td> [[$b->solution ]] </td>
		</tr>
		@endforeach
	</table>
</div>
@stop
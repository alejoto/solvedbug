@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Deleted bugs</h1>
	<a href="[[URL::to('/')]]">Back to bugs list</a>
	<div class="row">
		<div class="col-sm-4">
			<table class="table">
				<tr>
					<th>Description</th>
				</tr>
				@foreach($bugs as $b)
				<tr>
					<td> 
						[[$b->description ]] 
						<br>
						<small class="text-muted">[[$b->solution ]] </small>
						<br>
						[[Form::open(array('url'=>URL::to('/del/'.$b->id)))]]
						<input type="submit" class='btn btn-link' value='restore'>
						[[Form::close()]]
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>	
</div>
@stop
@section('scripts')
<script>
$(function(){
	
	//
	
	//
	
	//

	//

	//
});

	
</script>
@stop
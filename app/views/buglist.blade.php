@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Bug log table</h1>
	<a href="" id='show_new_bug_form'>Register a new bug</a>
	<div id="new_bug_form">
		<div class="row">
			<div class=""></div>
			<div class="col-sm-4">
				Description
				<textarea  class='form-control' id='description' name='description' placeholder='description'></textarea>
			</div>
		</div>
		<br>
		<div class="row">
			<div class=""></div>
			<div class="col-sm-4">
				Language
				<input type="hidden" class='form-control' id='language' name='language' >
					@foreach($languages as $l)
						<br>
						<input type='checkbox' id='lang[[$l->id]]' class='lang' value="[[$l->id]]">[[$l->name]]
					@endforeach
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class=""></div>
			<div class="col-sm-4">
				Solution
				<textarea  class='form-control' id='solution' name='solution' placeholder='solution'></textarea>
			</div>
		</div>
		<br>
		<div class="row">
			<div class=""></div>
			<div class="col-sm-4">
				<a href="" id="submit">Submit</a>
				<br>
				<a href="" id="hide_new_bug_form">Cancel</a>

			</div>
		</div>
	</div>
	<table class="table">
		<tr>
			<th>Description</th>
			<th>
				<a href="[[URL::to('lang')]]">Languages</a>
			</th>
			<th>Solution</th>
		</tr>
		@foreach($bugs as $b)
		<tr>
			<td> 
				[[$b->description ]] 
				<br>
				<a href="[[URL::to('bug/'.$b->id.'/edit')]]">edit</a>
			</td>
			<td> 
				@foreach($b->llangs as $l)
					[[$l->name]]
				@endforeach
			 </td>
			<td> [[$b->solution ]] </td>
		</tr>
		@endforeach
	</table>
</div>
@stop
@section('scripts')
<script>
$(function(){
	$('#new_bug_form').hide();
	$('#show_new_bug_form').click(function(e){
		e.preventDefault();
		$('#new_bug_form').show('fast');
	});
	$('#hide_new_bug_form').click(function(e){
		e.preventDefault();
		$('#new_bug_form').hide('fast');
	});

	
	$('.lang').each(function(){
		var id=$(this).attr('id');
		id=id.replace('lang','');
		fill_lang(id);
	});
	
	//$('#language').val(lang_iterator);

	function fill_lang(id){
		$('#lang'+id).click(function(e){
			var lang_iterator='';
			var comma='';
			$('.lang').each(function(){
				var id=$(this).attr('id');
				id=id.replace('lang','');
				if ( $('#lang'+id).is(':checked') ) {
					lang_iterator=lang_iterator+comma+id;
					comma=',';
				};
			});
			$('#language').val(lang_iterator);
		});
	}

	$('#submit').click(function(e){
		e.preventDefault();
		var base=$('#base').html();
		var description=$('#description').val();
		var language=$('#language').val();
		var solution=$('#solution').val();
		if (description.trim()=='') {
			$('#description').focus();
		} else if (language.trim()==''){
			$('#language').focus();
		}else if (solution.trim()==''){
			$('#solution').focus();
		} else {
			$.post(
				base+'/bug',
				{
					description:description
					,language:language
					,solution:solution
				},
				function(d){
					if (d==1) {
						
					}
				}
				).ajaxSuccess(function(){location.reload();});
			;
		}
			
	});
});

	
</script>
@stop
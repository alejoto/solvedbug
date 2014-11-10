@extends('layouts.base')
@section('main')
<div class="container">
	<h1>Edit bug record</h1>
	[[Form::model($bug,array('route'=>array('bug.update',$id), 'method' => 'PUT') )]]
	<div class="row">
		<div class="col-sm-4">
			Description
			[[ Form::textarea('description', null, array('class' => 'form-control', 'rows'=>'3')) ]]
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<?php 
				$activelanguages=array();
				$i=0;
				foreach ($bug->llangs as $a_l) //(active language)
				{
					$activelanguages[$i]=$a_l->id;
					$i++;
				}
			?>
			Language
			<br>
			<?php $lls='';$comma=''; ?>
			@foreach($languages as $ln)
				<?php 
				$ischecked='';
				if (in_array($ln->id, $activelanguages)) {
					$ischecked='checked';
					$lls=$lls.$comma.$ln->id;
					$comma=',';
				}
				//
				?>
				<input type='checkbox' class='lang' id='lang[[$ln->id]]' [[$ischecked]] >[[$ln->name]]
				<br>
				
			@endforeach
			<input type="text" value='[[$lls]]' id='language' name='language'>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			Solution
			[[ Form::textarea('solution', null, array('class' => 'form-control', 'rows'=>'3')) ]]
		</div>
	</div>
	<br>
	<input type="submit">
		
	[[Form::close()]]
</div>
@stop

@section('scripts')
<script>

$(function(){
	
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

	/*$('#submit').click(function(e){
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
			
	});*/
});

	
</script>
@stop
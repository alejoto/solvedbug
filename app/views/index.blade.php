@extends('layouts.base')
@section('main')
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">EDRY 3</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="" class="active">Just for test</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<h1>WELCOME TO LARAVEL EDRY FRAMEWORK</h1>
	This view was generated from the laravel framework version 4.2 with features as mentioned below:
	<ul>
		<li>
			A simple view templated from app/views/layouts/base
		</li>
		<li>
			a hidden #base div containing always the current url, no matter if locally or webserved runned.  Useful mainly for ajax requests.
		</li>
		<li>
			Bootstrap 3.2.0 CSS library
		</li>
		<li>
			Brackets instead of Curly brackets in order to allow angular js usage. Next text is an example: "<i class="text-info">[[$test]]</i>" (php variable set in routes.php). Brackets were set inside the app/start/global.php file with 
			<code>Blade::setContentTags('[[', ']]'); </code> and <code>Blade::setEscapedContentTags('[[[', ']]]');</code> static methods.
		</li>
		[[--- this text should not be shown in the view as has been scaped---]]
		<li>
			sticky-footer-navbar.css properly fixes the navbar and footer on top and bottom of page, respectively.
		</li>
		<li>
			Datepicker #example_datepicker input 
			<div class="input-group date col-sm-4">
				<input id='example_datepicker' type="text" class='form-control'>
				<span class="input-group-addon "> <span class="glyphicon glyphicon-calendar"></span>  </span>
			</div>
			
			| 
			<a href="http://eonasdan.github.io/bootstrap-datetimepicker/#events">Documentation</a>

		</li>
		<li>
			Timepicker #example_timepicker input
			<div class="input-group time col-sm-4">
				<input type="text" id="example_timepicker" class='form-control'>
				<span class="input-group-addon "> <span class="glyphicon glyphicon-time"></span>  </span>
			</div>
			| 
			<a href="http://eonasdan.github.io/bootstrap-datetimepicker/#events">Documentation</a>
		</li>
		<li>
			Jquery 1.11.1 minified
		</li>
		<li>
			Bootstrap validator
			<form action="" id="testvalidator"  class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-6">
						<input type="text" class="form-control" name="username" id='username'/>
					</div>
					
				</div>
			</form>
			Conditions for a nice layout validator:
			<ul>
				<li>
					Fields must be linked to a
					form tag with id.
				</li>
				<li>
					fiels must be wrapped inside 
					form-group div.
				</li>
				<li>
					field size can be set with col-sm-[1 to 12] class
				</li>
				<li>
					inputs must contain the .form-control class
				</li>
				<li>
					Messages are currenty set in Spanish.
				</li>
				<li>
					Remove <code>HTML::script('js/language/es_ES.js');</code> and go back to English.
				</li>
				<li>
					Read the <a href="http://bootstrapvalidator.com/">Documentation</a>
				</li>
			</ul>
		</li>
		<li>
			Using angular js version 1.2.26
			<div class="row">
				<div class="col-sm-6">
					<input type="text" class="form-control" 
						ng-model='testng'
						placeholder='test angular js here'>
				</div>
			</div>
				
		</li>
		<li>angular js test result: <h3>{{testng}}</h3> </li>
	</ul>
	<br>
</div>
<div class="footer">
	<div class="container">
		Here goes the footer
	</div>
	
</div>
@stop

@section('scripts')
<script type="text/javascript">
	$(function(){
		//datepicker
		$('.date').datetimepicker({
			showToday: true,
			pickTime: false,
			useStrict: true
		}
		)
		;
		//timepicker
		$('.time').datetimepicker({
			showToday: true,
			pickDate: false,
			useStrict: true
		}
		)
		;
		//form validator
		$('#testvalidator').bootstrapValidator({
			live: 'enabled',
			feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields:{
	        	username:{
	        		validators: {
	        			notEmpty: true
	        		}
	        	}
	        }
		});
	});

</script>
@stop

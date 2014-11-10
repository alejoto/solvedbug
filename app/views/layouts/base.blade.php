<!DOCTYPE html>
<html  ng-app>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		[[HTML::style('css/bootstrap-3.2.0-dist/css/bootstrap.css');]]
		[[HTML::style('css/bootstrap-3.2.0-dist/css/bootstrap-theme.css');]]
		[[HTML::style('css/sticky-footer-navbar.css');]]
		[[HTML::style('css/bootstrap-datetimepicker.min.css');]]
		[[HTML::style('css/bootstrapValidator.min.css');]]

		@section('head')
		@show
	</head>
	<body>
		<div class='hide'  id='base'>[[URL::to('/')]]</div>
		@section('main')
		@show
	</body>
	[[HTML::script('js/jquery-1.11.1.min.js');]]
	[[HTML::script('js/bootstrap.min.js');]]
	[[HTML::script('js/moment.js');]]
	[[HTML::script('js/bootstrap-datetimepicker.js');]]
	[[HTML::script('js/bootstrapValidator.min.js');]]
	[[HTML::script('js/language/es_ES.js');]]
	[[HTML::script('js/angular.min.js');]]
	
	@section('scripts')
	@show
</html>
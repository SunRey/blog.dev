@extends('layouts.master')

@yield('top-script')
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
@stop

@section('content')
	<div class="welcome">
		<a href="{{{ action('PostsController@index') }}}" title="Jonathan S Reyes"><img class='img-responsive' src="/white_logo.jpg" alt="JSR.Blog"></a>
		<h1>Hello, this is {{{ $name }}}'s MVC Blog!!!</h1>
	</div>
@stop
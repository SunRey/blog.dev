@extends('layouts.master')

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Hello, this is {{{ $name }}}'s MVC Blog!!!</h1>
                <hr>
                <p>This site uses the frameworks Laravel, on the back-end, and Bootstrap, on the front-end, to implement a MVC design patter as part of my learning experience at Codeup. Thank you for visiting </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside>
@stop
{{-- 	<div class="welcome">
		<a href="{{{ action('PostsController@index') }}}" title="Jonathan S Reyes"><img class='img-responsive' src="/white_logo.jpg" "></a>
	</div> --}}
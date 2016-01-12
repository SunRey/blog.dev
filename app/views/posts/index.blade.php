@extends('layouts.master')

@section('content')
    <ol class="breadcrumb pull-right">
        <li><a href="{{{ action('PostsController@create') }}}">Create New Posts</a></li>
    </ol>
    <div class="panel">
        <div class="row">
            <div class="col-sm-8 blog-class">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post['title'] }}}</a></h2>
                        <small class="">{{{ $post['created_at']->format('F d, Y') }}}</small>
                        <p>{{{ $post['description'] }}}</p>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@stop
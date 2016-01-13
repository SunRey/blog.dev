@extends('layouts.master')

@section('content')
    <div class="panel">
        <div class="row">
            <div class="col-sm-8 blog-class">
                <div class="blog-post">
                    <h2 class="blog-title">{{{ $post->title }}}</h2>
                    <p class="blog-post-meta">{{{ $post['created_at']->format('F-d-Y') }}}</p>
                    <p>{{{ $post['description'] }}}</p>
                </div>
            </div>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{{{ action('PostsController@index') }}}">All Posts</a></li>
            <li><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a></li>
        </ol>
    </div>
@stop

@extends('layouts.master')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="blog-post">
                    <h2 class="blog-title">{{{ $post->title }}}</h2>
                    <p class="blog-post-meta">{{{ $post->created_at->format('F-d-Y') }}}</p>
                    <p>{{{ $post['description'] }}}</p>
                    <small>Updated: {{{ $post->updated_at->diffForHumans() }}}</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="{{{ action('PostsController@index') }}}">All Posts</a>
            </li>
        @if(Auth::check())
            <li>
                <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
            </li>
        @endif
        </ul>

        @if(Auth::check())
            {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE'])}}
                <button class='btn btn-danger'>DELETE</button>
            {{ FORM::close() }}
        @endif
    </div>
    <br>
</main>
@stop

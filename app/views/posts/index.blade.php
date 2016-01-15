@extends('layouts.master')

@section('content')
<div class="container">
    <main>
        <div class="row">
            <div class="col-sm-8 blog-class">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
                        <small class="">{{{ $post->created_at->format('F-d-Y') }}}</small>
                        <p>{{{ $post->description }}}</p>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
            <ol class="breadcrumb">
                <li><a href="{{{ action('PostsController@create') }}}">Create New Posts</a></li>
                <li>
                    <input name='search' placeholder='Search by Title or email'>
                </li>
            </ol>
    </main>
    {{ $posts->links() }}
</div>
@stop
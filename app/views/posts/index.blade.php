@extends('layouts.master')

@section('content')
    <div class="panel">
        <div class="row">
            <div class="col-sm-8 blog-class">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-title">{{{ $post['title'] }}}</h2>
                        <p class="blog-post-meta">{{{ $post['created_at']->format('F-d-Y') }}}</p>
                        <p>{{{ $post['description'] }}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
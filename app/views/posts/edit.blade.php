@extends('layouts.master')

@section('content')
<main>
    <div class="container">
        <ul class="">
            <li><a href="{{{ action('PostsController@index') }}}">All Posts</a></li>
        </ul>
        {{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) }}
            <div class="input-field">
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                {{ Form::label('title', 'Your post title') }}
                {{ Form::text('title', $post->title, ['class' => 'form-control', 'id' => 'title']) }}
            </div>
            <div class="input-field">
                {{ $errors->first('description', '<span class="help-block">:message</span>') }}
                {{ Form::label('description', 'Your post entry') }}
                {{ Form::textarea('description', $post->description, ['class' => 'form-control', 'id' => 'description']) }}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" href="{{ action('PostsController@show', $post->id) }}">Cancel</a>
        {{ Form::close() }}
    </div>
</main>
@stop
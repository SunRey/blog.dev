@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <ol class="breadcrumb">
            <li><a href="{{{ action('PostsController@index') }}}">All Posts</a></li>
        </ol>
        {{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) }}
            <div class="form-group">
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                {{ Form::label('title', 'Your post title') }}
                {{ Form::text('title', $post->title, ['class' => 'form-control', 'id' => 'title']) }}
            </div>
            <div class="form-group">
                {{ $errors->first('description', '<span class="help-block">:message</span>') }}
                {{ Form::label('description', 'Your post entry') }}
                {{ Form::textarea('description', $post->description, ['class' => 'form-control', 'id' => 'description']) }}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" href="{{ action('PostsController@show', $post->id) }}">Cancel</a>
        {{ Form::close() }}
    </div>
@stop
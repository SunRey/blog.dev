@extends('layouts.master')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{{ action('PostsController@index') }}}">All Posts</a></li>
    </ol>
    <div class="jumbotron">
        {{ Form::open(array('action' => 'PostsController@store')) }}
            <div class="form-group">
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title goes here']) }}
            </div>
            <div class="form-group">
                {{ $errors->first('description', '<span class="help-block">:message</span>') }}
                {{ Form::label('description', 'Blog Entry') }}
                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Blog body']) }}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
        {{ Form::close() }}
    </div>
@stop

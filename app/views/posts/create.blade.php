@extends('layouts.master')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{{ action('PostsController@index') }}}">All Posts</a></li>
    </ol>
    <div class="jumbotron">
        <form method='POST' action="{{{ action('PostsController@store') }}}">
            <div class="form-group">
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                <label for="title">Your post title</label>
                <input type="text" name='title' class="form-control" id="title" placeholder="Place title"
                value="{{{ Input::old('title') }}}">
            </div>
            <div class="form-group">
                {{ $errors->first('description', '<span class="help-block">:message</span>') }}
                <label for="description">Blog Entry</label>
                <textarea name='description' class="form-control" placeholder='type here'>{{{ Input::old('description') }}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
        </form>
    </div>
@stop

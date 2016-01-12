@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <ol class="breadcrumb">
            <li><a href="{{{ action('PostsController@index') }}}">All Posts</a></li>
        </ol>
        <form method='POST' action="{{{ action('PostsController@update', $post['id']) }}}">
            <input type='hidden' name='_method' value='PUT'>
            <div class="form-group">
                <label for="title">Your post title</label>
                <input type="text" name='title' class="form-control" id="title" placeholder=""
                value="{{{ $post->title }}}">
            </div>
            <div class="form-group">
                <label for="description">Blog Entry</label>
                <textarea name='description' class="form-control">{{{ $post->description }}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a class="btn btn-warning" href="{{{ action('PostsController@show', $post->id) }}}">Cancel</a>
        </form>
    </div>
@stop
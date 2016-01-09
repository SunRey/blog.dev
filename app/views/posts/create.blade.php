@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <form method='POST' action="{{{ action('PostsController@store') }}}">
            <div class="form-group">
                <label for="title">Your post title</label>
                <input type="text" name='title' class="form-control" id="title" placeholder="Place title"
                value="{{{ Input::old('title') }}}">
            </div>
            <div class="form-group">
                <label for="description">Blog Entry</label>
                <textarea name='description' class="form-control" placeholder='type here'>{{{ Input::old('description') }}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop

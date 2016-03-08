@extends('layouts.master')

@section('content')
<div class="container">
    <section>
        <div class="row">
            <div class="col s12">
                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-content">
                            <h2 class="card-action"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
                            <small class="">{{{ $post->created_at->format('F-d-Y') }}}</small>
                            <p>{{{ $post->description }}}</p>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </section>
        @if(Auth::check())
            <ul class="">
                <li><a href="{{{ action('PostsController@create') }}}">Create New Posts</a></li>
                <li>
                    <form action='#'>
                        <input name='search' placeholder='Search by Title or email'>
                        <button type='submit' class='btn btn-primary'>Submit</button>
                    </form>
                </li>
            </ul>
        @endif
    {{ $posts->links() }} </li>
</div>
@stop
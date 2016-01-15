@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        {{ Form::open(array('action' => 'HomeController@postLogin')) }}
            <div class="form-group">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password']) }}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
        {{ Form::close() }}
    </div>
@stop
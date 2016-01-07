@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" type="text/css" href="">
@stop

@section('content')
    <h3>The number rolled was {{{ $random }}}</h3>
    <h3>The number you guessed was {{{ $guess }}}</h3>
    <h3><?= ($guess == $random) ? 'You are correct!!' : 'Sozz, guess again'; ?></h3>
@stop
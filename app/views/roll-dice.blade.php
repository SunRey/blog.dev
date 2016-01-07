@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" type="text/css" href="">
@stop

@section('content')
    <h3>The number rolled was {{{ $random }}}</h3>
    <h3>The number you guessed was {{{ $guess }}}</h3>
    <h3><?= ($guess == $random) ? 'You are correct!!' : 'Sozz, guess again'; ?></h3>

    <ul>Guess Pool
        <li><a href="{{{ action('HomeController@rollDice', array(1)) }}}">1</a></li>
        <li><a href="{{{ action('HomeController@rollDice', array(2)) }}}">2</a></li>
        <li><a href="{{{ action('HomeController@rollDice', array(3)) }}}">3</a></li>
        <li><a href="{{{ action('HomeController@rollDice', array(4)) }}}">4</a></li>
        <li><a href="{{{ action('HomeController@rollDice', array(5)) }}}">5</a></li>
        <li><a href="{{{ action('HomeController@rollDice', array(6)) }}}">6</a></li>
    </ul>
@stop
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@sayHello');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::get('/sayhello/{name?}', 'HomeController@myFirstView');

Route::get('/roll-dice/{guess?}', 'HomeController@rollDice');

Route::resource('/posts', 'PostsController');

Route::get('orm-test', function() 
{
    $post = Post::find(8);
    
    $post->delete();

    return Redirect::action('posts.index');
});
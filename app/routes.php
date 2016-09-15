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
Route::get('/rewrite', 'HomeController@showRewrite');

Route::get('/portfolio', 'HomeController@showPortfolio');
Route::post('/contact_request', 'HomeController@submitContactForm');

Route::get('/resume', 'HomeController@showResume');

Route::get('/sayhello/{name?}', 'HomeController@myFirstView');

Route::get('/roll-dice/{guess?}', 'HomeController@rollDice');

Route::get('/posts/manage', 'PostsController@managePosts');

Route::resource('/posts', 'PostsController');

Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@getLogout');

Route::resource('tags', 'TagsController');

Route::get('orm-test', function() 
{
    $post = Post::find(8);
    
    $post->delete();

    return Redirect::action('posts.index');
});
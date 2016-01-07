<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function sayHello()
	{
		return View::make('hello')->with('name', 'JoNathan');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function myFirstView($name = 'person')
	{
		if ($name == "Toast") {
    		return Redirect::to('/');
    	} else {
        	$data = ['name' => $name];
        	return View::make('my-first-view')->with($data);
    	}
	}

	public function rollDice($guess = '')
	{
		if($guess == '') {
        	return 'Please guess a number';
    	} else {
        	$random = mt_rand(1, 20);
        	$data = ['guess' => $guess, 'random' => $random];
        	return View::make('roll-dice')->with($data);
    	}
	}

}

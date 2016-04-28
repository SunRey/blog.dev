<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$query = Post::with('user'); //query builder

		if(Input::has('search')) {
			$search = Input::get('search');
			$query->where('title', 'like', '%' . $search . '%');
			$query->orWhere('description', 'like', '%' . $search . '%');
			$query->orWhereHas('user', function($q) {
				$search = Input::get('search');
				$q->where('email', 'like', '%' . $search . '%');
				$q->orWhere('first_name', 'like', '%' . $search . '%' );
				$q->orWhere('last_name', 'like', '%' . $search . '%');

			});
		}


		if (Request::wantsJson()) {
			$posts = $query->orderBy('created_at', 'desc')->get();
			return Response::json($posts);
		} else {
			$posts = $query->orderBy('created_at', 'desc')->paginate(3);
			return View::make('posts.index', array('posts' => $posts));
		}

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();

		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}

		return View::make('posts.show', array('post' => $post));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', 'This post does not exist');
			return Redirect::action('PostsController@index');
		}

		return View::make('posts.edit', array('post' => $post));
	}
		// return "show the edit form with the id of $id";


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);

		return $this->validateAndSave($post);
	}

	/**
	 * Validate Inputs against rules, return errors
	 *
	 * @param  int  $post
	 * @return Saves and responds with view
	 */
	protected function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
			Log::info(Input::all());
			return Redirect::back()->withInput()->withErrors($validator);
		} else {

			$post->title = Input::get('title');
			$post->description = Input::get('description');
			$post->user_id = Auth::id();


			$result = $post->save();

			if($result) {
				return Redirect::action('PostsController@show', $post->id);
			} else {
				return Redirect::back()->withInput();
			}

			return Redirect::action('posts.index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy ($id)
	{
		$post = Post::find($id);
		$response['success'] = $post->delete() ? true : false;
        
        if(Request::ajax()) {
            return Response::json($response);    
        } else {
            return Redirect::action('posts.index');
        }
	}

	public function managePosts ()
	{
		return View::make('posts.manage');
	}

}

<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');

		if(Input::has('search')) {
			$search = Input::get('search');
			$query->where('title', 'like', "%$search%")
					->orWhere('body', 'like', "%$search%");

		}

		$posts = $query->orderBy('created_at', 'desc')->paginate(5);

		return View::make('posts.index')->with('posts', $posts);
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
			return Redirect::action('PostsController@index');
		}

		return View::make('posts.show')->with('post', $post);
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

		return View::make('posts.edit')->with('post', $post);
	}


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
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		return Redirect::action('PostsController@index');
	}


	protected function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
	        return Redirect::back()->withInput()->withErrors($validator);
		}

		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();

		return Redirect::action('PostsController@index');
	}
}

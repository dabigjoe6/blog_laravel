<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		$posts = Post::all();
		return view('post.index')->with("posts", $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validateData = $request->validate([
			'title' => 'required',
			'body' => 'required'
		]);

		$post = new Post();
		$post->title = $request->input('title');
		$post->body = $request->input('body');

		$post->save();

		$posts = Post::all();

		return redirect('/')->with('success', 'New Post Created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{

		$post = Post::find($id);
		return view('post.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{ }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$validateData = $request->validate([
			'title' => 'required',
			'body' => 'required'
		]);

		$post = Post::find($id);
		$post->title = $request->input('title');
		$post->body = $request->input('body');

		$post->save();

		$posts = Post::all();

		return view('post.index')->with('posts', $posts);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return redirect('/')->with('success', 'Post deleted successfuly');
	}
}

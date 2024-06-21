<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        //store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        Session::flash('success', 'Post was successfully saved!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate the data
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        //store in the database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        Session::flash('success', 'Post was successfully updated!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'Post was successfully deleted!');

        return redirect()->route('posts.index');
    }
}

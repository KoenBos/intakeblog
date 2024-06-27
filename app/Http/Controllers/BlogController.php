<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function getIndex()
    {
        // Create a variable and store all the blog posts in it from the database
        $posts = Post::paginate(10);

        // Return a view and pass in the above variable
        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug)
    {
        // Fetch from the DB based on slug
        $post = Post::where('slug', '=', $slug)->first();

        // Return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }

}
